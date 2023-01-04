<?php

namespace AppleIAP\Model\VerifyModel;

use EJM\MainMapper;

/**
 * @method int getAdamId()
 * @method string getApplicationVersion()
 * @method int getAppItemId()
 * @method string getBundleId()
 * @method int getDownloadId()
 * @method InApp[] getInApp()
 */
class Receipt extends MainMapper
{
    public const MAP = [
        'adam_id' => 'int',
        'application_version' => 'string',
        'app_item_id' => 'int',
        'bundle_id' => 'string',
        'download_id' => 'int',
        'in_app' => InApp::class.'[]',
        'original_application_version' => 'string',
        'original_purchase_date' => 'string',
        'original_purchase_date_ms' => 'string',
        'original_purchase_date_pst' => 'string',
        'receipt_creation_date' => 'string',
        'receipt_creation_date_ms' => 'string',
        'receipt_creation_date_pst' => 'string',
        'receipt_type' => 'string',
        'request_date' => 'string',
        'request_date_ms' => 'string',
        'request_date_pst' => 'string',
        'version_external_identifier' => 'int',
    ];
}