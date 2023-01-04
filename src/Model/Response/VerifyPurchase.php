<?php

namespace AppleIAP\Model\Response;

use AppleIAP\Model\VerifyModel\InApp;
use AppleIAP\Model\VerifyModel\PendingRenewalInfo;
use AppleIAP\Model\VerifyModel\Receipt;
use EJM\MainMapper;

/**
 * @method getEnvironment()
 * @method Receipt getReceipt()
 * @method InApp[] getLatestReceiptInfo()
 * @method PendingRenewalInfo[] getPendingRenewalInfo()
 * @method int getStatus()
 */
class VerifyPurchase extends MainMapper
{
    public const MAP = [
        'environment' => 'string',
        'receipt' => Receipt::class,
        'latest_receipt_info' => InApp::class.'[]',
        'pending_renewal_info' => PendingRenewalInfo::class.'[]',
        'status' => 'int'
    ];
}