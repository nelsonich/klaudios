@extends('layouts.app')
@section('title', 'Klaudios | Paypay')
@section('content')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="w3-panel w3-green w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
              class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                <p>{!! $message !!}</p>
            </div>
            <?php Session::forget('success');?>
        @endif
        @if ($message = Session::get('error'))
            <div class="w3-panel w3-red w3-display-container">
        <span onclick="this.parentElement.style.display='none'"
              class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                <p>{!! $message !!}</p>
            </div>
            <?php Session::forget('error');?>
        @endif
{{--        @if(session()->has('message'))--}}
{{--            <div class="alert alert-success">--}}
{{--                {{ session()->get('message') }}--}}
{{--            </div>--}}
{{--        @endif--}}
        <form class="w3-container w3-display-middle w3-card-4 " method="POST" id="payment-form"  action="{{ route('payment-with-paypal') }}">
            {{ csrf_field() }}
            <h2 class="w3-text-blue">Payment Form</h2>
            <p>Demo PayPal form - Integrating paypal in laravel</p>
            <label class="w3-text-blue"><b>Enter Amount</b></label>
            <input class="w3-input w3-border" name="amount" type="text">
            <button class="w3-btn w3-blue">Pay with PayPal</button>
        </form>
    </div>
@endsection
