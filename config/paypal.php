<?php
return [
    'client_id' => env('PAYPAL_CLIENT_ID','ASgjvvTQYtljYPavajd50KcY2Fkoyv9Cv3CIUeZUTxqjsGCU_-mpdlx0-QbdnMcIe_aJ0pYInQg1DHDy'),
    'secret' => env('PAYPAL_SECRET','EKKlkOu-pCvp8wQkm5QfmmbqCun9Z5RYY3smAqUc9fDetj_nGxQ5W7U3stv3EcaWSfDzdBfxrQrZbRF0'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];
