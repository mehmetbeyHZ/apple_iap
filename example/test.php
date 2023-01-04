<?php
require "../vendor/autoload.php";
// {"signedPayload":"eyAk...."}
$data = "{\"signedPayload\":\"....\"}";
$iap = new \AppleIAP\AppleIAP();

$iap->getNotificationDetails($data)
    ->getData()
    ->getSignedTransactionInfo()
    ->getAppAccountToken();