<?php

namespace AppleIAP\Model;

class SignedTransactionInfo
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function getTransactionId(): ?string
    {
        return $this->data['transactionId'] ?? null;
    }

    public function getOriginalTransactionId(): ?string
    {
        return $this->data['originalTransactionId'] ?? null;
    }

    public function getWebOrderLineItemId(): ?string
    {
        return $this->data['webOrderLineItemId'] ?? null;
    }

    public function getBundleId(): ?string
    {
        return $this->data['bundleId'] ?? null;
    }

    public function getProductId(): ?string
    {
        return $this->data['productId'] ?? null;
    }

    public function getPurchaseDate(): ?int
    {
        return $this->data['purchaseDate'] ?? null;
    }

    public function getOriginalPurchaseDate(): ?int
    {
        return $this->data['originalPurchaseDate'] ?? null;
    }

    public function getExpiresDate(): ?int
    {
        return $this->data['expiresDate'] ?? null;
    }

    /**
     * @return int|null
     * The number of consumable products purchased.
     */
    public function getQuantity(): ?int
    {
        return $this->data['quantity'] ?? null;
    }

    /**
     * https://developer.apple.com/documentation/appstoreservernotifications/type
     * The product type of the in-app purchase.
     */
    public function getType()
    {
        return $this->data['type'] ?? null;
    }

    /**
     * @return mixed|null
     * A UUID that associates the transaction with a user on your service.
     */
    public function getAppAccountToken(): mixed
    {
        return $this->data['appAccountToken'] ?? null;
    }

    /**
     * @return mixed|null
     * A string that describes whether the transaction was purchased by the user, or is available to them through Family Sharing.
     */
    public function getInAppOwnershipType(): ?string
    {
        return $this->data['inAppOwnershipType'] ?? null;
    }

    public function getSignedDate(): ?int
    {
        return $this->data['signedDate'] ?? null;
    }

}