<?php

namespace AppleIAP\Constants;
/*
 * Notification subtype -> https://developer.apple.com/documentation/appstoreservernotifications/subtype
 */
enum Subtype
{
    case INITIAL_BUY;
    case RESUBSCRIBE;
    case DOWNGRADE;
    case UPGRADE;
    case AUTO_RENEW_ENABLED;
    case AUTO_RENEW_DISABLED;
    case VOLUNTARY;
    case BILLING_RETRY;
    case PRICE_INCREASE;
    case PRODUCT_NOT_FOR_SALE;
    case GRACE_PERIOD;
    case BILLING_RECOVERY;
    case PENDING;
    case ACCEPTED;

}