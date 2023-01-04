<?php

namespace AppleIAP\Model\VerifyModel;

use EJM\MainMapper;

/**
 * @method getAutoRenewProductId()
 * @method getAutoRenewStatus()
 * @method getExpirationIntent()
 * @method getIsInBillingRetryPeriod()
 * @method getOriginalTransactionId()
 * @method getProductId()
 */
class PendingRenewalInfo extends MainMapper
{
    public const MAP = [
        'auto_renew_product_id' => 'string',
        'auto_renew_status' => 'string',
        'expiration_intent' => 'string',
        'is_in_billing_retry_period' => 'string',
        'original_transaction_id' => 'string',
        'product_id' => 'string',
    ];
}