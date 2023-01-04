<?php

namespace AppleIAP\Jws;

use AppleIAP\Model\SignedPayload;
use AppleIAP\Model\SignedRenewalInfo;
use AppleIAP\Model\SignedTransactionInfo;

class Decrypt
{

    private static function decrypt($payload) : array{
        $explode = explode('.',$payload);
        if (!isset($explode[1])){
            throw new \RuntimeException("Incorrect payload.");
        }
        return json_decode(base64_decode($explode[1]),true);
    }

    public static function signedPayload($payload){
        return self::decrypt($payload);
    }

    public static function signedTransactionInfo($payload) : SignedTransactionInfo{
        return new SignedTransactionInfo(self::decrypt($payload));
    }

    public static function signedRenewalInfo($payload) : SignedRenewalInfo{
        return new SignedRenewalInfo(self::decrypt($payload));
    }



}