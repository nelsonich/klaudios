<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Api\Amount;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use App\Models\Payer as Pay;

class PayPalController extends Controller
{

    public function __construct()
    {
        /** PayPal api context **/
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential(
                $paypal_conf['client_id'],
                $paypal_conf['secret'])
        );
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    public function paypal()
    {
        return view('payments.paypal');
    }

    public function payWithpaypal(Request $request)
    {
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $item_1 = new Item();
        $item_1->setName('Item 1')/** item name **/
        ->setCurrency('USD')
            ->setQuantity(1)
            ->setPrice($request->get('amount'));
        /** unit price **/
        $item_list = new ItemList();
        $item_list->setItems(array($item_1));
        $amount = new Amount();
        $amount->setCurrency('USD')
            ->setTotal($request->get('amount'));
        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Your transaction description');
        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(URL::route('status'))/** Specify return URL **/
        ->setCancelUrl(URL::route('status'));
        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                Session::put('error', 'Connection timeout');
                return Redirect::route('paywithpaypal');
            } else {
                Session::put('error', 'Some error occur, sorry for inconvenient');
                return Redirect::route('paywithpaypal');
            }
        }
        foreach ($payment->getLinks() as $link) {
            if ($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }
        /** add payment ID to session **/
        Session::put('paypal_payment_id', $payment->getId());
        if (isset($redirect_url)) {
            /** redirect to paypal **/
            return Redirect::away($redirect_url);
        }
        Session::put('error', 'Unknown error occurred');
        return Redirect::route('paywithpaypal');
    }

    public function getPaymentStatus(Request $request)
    {
        /** Get the payment ID before session clear **/
        $payment_id = Session::get('paypal_payment_id');
        /** clear the session payment ID **/
        Session::forget('paypal_payment_id');
        if (empty($request->get('PayerID')) || empty($request->get('token'))) {
            Session::put('error', 'Payment failed');
            return redirect()->back();
        }
        $payment = Payment::get($payment_id, $this->_api_context);
        $execution = new PaymentExecution();
        $execution->setPayerId($request->get('PayerID'));
        /**Execute the payment **/
        $result = $payment->execute($execution, $this->_api_context);

        if ($result->getState() == 'approved') {
            Session::put('success', 'Payment success');
//            dd($result->payer->payer_info->payer_id);
            Pay::create([
                "user_id" => Auth::id(),
                "payer_id" => $result->payer->payer_info->payer_id,
                "email" => $result->payer->payer_info->email,
                "payer_status" => $result->state,
                "first_name" => $result->payer->payer_info->first_name,
                "last_name" => $result->payer->payer_info->last_name,
                "country_code" => $result->payer->payer_info->country_code,
                "currency_code" => $result->transactions[0]->amount->currency,
                "amt" => $result->transactions[0]->amount->total,
                "time_stamp" => $result->transactions[0]->related_resources[0]->sale->create_time,
            ]);

            return redirect()->back();
        }
        Session::put('error', 'Payment failed');
        return redirect()->back();
    }
}
