<?php

namespace AppleIAP\Model\VerifyModel;

use EJM\MainMapper;

/**
 * @method getExpiresDate()
 * @method getExpiresDateMs()
 * @method getExpiresDatePst()
 * @method getInAppOwnershipType()
 * @method getIsInIntroOfferPeriod()
 * @method getIsTrialPeriod()
 * @method getOriginalPurchaseDate()
 * @method getOriginalPurchaseDateMs()
 * @method getOriginalPurchaseDatePst()
 * @method getOriginalTransactionId()
 * @method getProductId()
 * @method getPurchaseDate()
 * @method getPurchaseDateMs()
 * @method getPurchaseDatePst()
 * @method getQuantity()
 * @method getTransactionId()
 * @method getWebOrderLineItemId()
 * @method getAppAccountToken()
 * @method getSubscriptionGroupIdentifier()
 */
class InApp extends MainMapper
{
    public const MAP = [
        'expires_date' => 'string',
        'expires_date_ms' => 'string',
        'expires_date_pst' => 'string',
        'in_app_ownership_type' => 'string',
        'is_in_intro_offer_period' => 'string',
        'is_trial_period' => 'string',
        'original_purchase_date' => 'string',
        'original_purchase_date_ms' => 'string',
        'original_purchase_date_pst' => 'string',
        'original_transaction_id' => 'string',
        'product_id' => 'string',
        'purchase_date' => 'string',
        'purchase_date_ms' => 'string',
        'purchase_date_pst' => 'string',
        'quantity' => 'string',
        'transaction_id' => 'string',
        'web_order_line_item_id' => 'string',
        // For latest_receipt_info
        'subscription_group_identifier' => 'string',
        'app_account_token' => 'string'
    ];
}