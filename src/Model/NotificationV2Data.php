<?php

namespace AppleIAP\Model;

use AppleIAP\Jws\Decrypt;

class NotificationV2Data
{
    private array $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getBundleId()
    {
        return $this->data['bundleId'] ?? null;
    }

    public function getBundleVersion()
    {
        return $this->data['bundleVersion'] ?? null;
    }

    public function getSignedTransactionInfo(): SignedTransactionInfo
    {
        return Decrypt::signedTransactionInfo($this->data['signedTransactionInfo']);
    }

    public function getSignedRenewalInfo() : SignedRenewalInfo{
        return Decrypt::signedRenewalInfo($this->data['signedRenewalInfo']);
    }

}