<?php

namespace AppleIAP;

use AppleIAP\Constants\NotificationType;
use AppleIAP\Constants\VerifyUrls;
use AppleIAP\Jws\Decrypt;
use AppleIAP\Model\NotificationV2;
use AppleIAP\Model\Response\VerifyPurchase;
use MClient\Request;

class AppleIAP
{
    protected $verifyUrl = VerifyUrls::VERIFY_PRODUCTION;

    /**
     * @return AppleIAP
     */
    public function enableSandboxMode(){
        $this->verifyUrl = VerifyUrls::VERIFY_SANDBOX;
        return $this;
    }

    /**
     * @param $notification
     * @return NotificationV2
     */
    public function getNotificationDetails($notification): NotificationV2
    {
        $decrypt = Decrypt::signedPayload($notification);
        return new NotificationV2($decrypt);
    }

    /**
     * @param string $password Your app’s shared secret, which is a hexadecimal string.
     * @param string $receiptData (Required) The Base64-encoded receipt data.
     * @param bool $excludeOldTransactions Set this value to true for the response to include only the
     *                                     latest renewal transaction for any subscriptions.
     *                                     Use this field only for app receipts that contain auto-renewable subscriptions.
     * @return mixed
     */
    public function verifyPurchase(string $password, string $receiptData, bool $excludeOldTransactions = false)
    {
        $response = Request::post($this->verifyUrl)
            ->addPost('receipt-data',$receiptData)
            ->addPost('password', $password)
            ->addPost('exclude-old-transactions', $excludeOldTransactions)
            ->setJsonPost(true)
            ->execute()
            ->getDecodedResponse();
        return new VerifyPurchase($response);
    }

}