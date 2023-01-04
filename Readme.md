## App store IAP
Verify Apple App store purchases and handle apple server notifications v2.

Get notification details.
```php
$data = '{"signedPayload":"..."}'
$iap = new \AppleIAP\AppleIAP();
$notificationDetails = $iap->getNotificationDetails($data);
$data = $notificationDetails->getData();
$transactionInfo = $data->getSignedTransactionInfo();
$renewalInfo = $data->getSignedRenewalInfo();

$transactionInfo->getAppAccountToken();
$transactionInfo->getOriginalTransactionId();
$transactionInfo->getExpiresDate();
$transactionInfo->getPurchaseDate();
...
```

verify purchases
```php
$receiptData = '...';
$password = '...';

$iap = new \AppleIAP\AppleIAP();
$verify = $iap->enableSandboxMode()
    ->verifyPurchase($password,$receiptData,true);
if($verify->getStatus() == 0){
    // verified.
    foreach ($verify->getLatestReceiptInfo() as $receipt){
        $receipt->getPurchaseDate();
        $receipt->getAppAccountToken();
        $receipt->getTransactionId();
        ...
    }
}
```