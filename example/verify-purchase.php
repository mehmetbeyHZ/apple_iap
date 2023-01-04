<?php
require "../vendor/autoload.php";

$receiptData = '...';
$password = '...';

$iap = new \AppleIAP\AppleIAP();
$r = $iap->enableSandboxMode()
    ->verifyPurchase($password,$receiptData,true);
