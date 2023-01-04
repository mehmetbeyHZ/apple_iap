<?php

namespace AppleIAP\Model;

class SignedRenewalInfo
{
    private array $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getOriginalTransactionId(): ?string
    {
        return $this->data['originalTransactionId'] ?? null;
    }

    public function getAutoRenewProductId()
    {
        return $this->data['autoRenewProductId'] ?? null;
    }

    /**
     * @return int|null
     * 0 : Automatic renewal is off. The customer has turned off automatic renewal for the subscription,
     * and it won’t renew at the end of the current subscription period.
     *
     * 1 : Automatic renewal is on. The subscription renews at the end of the current subscription period.
     */
    public function getAutoRenewStatus(): ?int
    {
        return $this->data['autoRenewStatus'] ?? null;
    }

    public function getRecentSubscriptionStartDate(): ?int
    {
        return $this->data['recentSubscriptionStartDate'] ?? null;
    }
}