<?php

$smtpHost = ''; //yout smtp host 
$smtpUsername = '';  //your email
$smtpPassword = ''; //your smtp password or app password
$smtpPort = ; 
$smtpSecure = ''; //your smtp password or app password


// Bypass SSL verification (for self-signed certificates)
$smtpOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
];
?>
