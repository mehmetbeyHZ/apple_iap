<?php

namespace AppleIAP\Constants;
/*
 * Notification Type -> https://developer.apple.com/documentation/appstoreservernotifications/notificationtype
 */
class NotificationType{
    public const CONSUMPTION_REQUEST = 1;
    public const DID_CHANGE_RENEWAL_PREF= 2;
    public const DID_CHANGE_RENEWAL_STATUS= 3;
    public const DID_FAIL_TO_RENEW= 4;
    public const DID_RENEW= 5;
    public const EXPIRED= 6;
    public const GRACE_PERIOD_EXPIRED= 7;
    public const OFFER_REDEEMED= 8;
    public const PRICE_INCREASE= 9;
    public const REFUND = 10;
    public const REFUND_DECLINED= 11;
    public const RENEWAL_EXTENDED= 12;
    public const REVOKE= 13;
    public const SUBSCRIBED= 14;
    public const TEST= 15;
}