<?php

$smtpHost = 'smtp.gmail.com'; 
$smtpUsername = 'hashangunathilaka12345@gmail.com'; 
$smtpPassword = 'bpmnwfdouokactqd'; 
$smtpPort = 465; 
$smtpSecure = 'ssl';


// Bypass SSL verification (for self-signed certificates)
$smtpOptions = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true,
    ],
];
?>
