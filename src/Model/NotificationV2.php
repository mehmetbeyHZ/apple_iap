<?php

namespace AppleIAP\Model;

class NotificationV2
{
    private array $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getNotificationType(){
        return $this->data['notificationType'] ?? null;
    }

    public function getSubType(){
        return $this->data['subtype'] ?? null;
    }

    public function getNotificationUUID(){
        return $this->data['notificationUUID'] ?? null;
    }

    public function getData(): NotificationV2Data
    {
        return new NotificationV2Data($this->data['data']);
    }
}