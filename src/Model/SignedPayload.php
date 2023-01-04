<?php

namespace AppleIAP\Model;

class SignedPayload
{
    private mixed $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getSignedPayload() : ?string {
        return $this->data['signedPayload'] ?? null;
    }
}