<?php

namespace FddCloud\bean\req;

class Notification
{
    public $sendNotification;

    public $notifyWay;

    public $notifyAddress;

    /**
     * @return mixed
     */
    public function getSendNotification()
    {
        return $this->sendNotification;
    }

    /**
     * @param mixed $sendNotification
     */
    public function setSendNotification($sendNotification)
    {
        $this->sendNotification = $sendNotification;
    }

    /**
     * @return mixed
     */
    public function getNotifyWay()
    {
        return $this->notifyWay;
    }

    /**
     * @param mixed $notifyWay
     */
    public function setNotifyWay($notifyWay)
    {
        $this->notifyWay = $notifyWay;
    }

    /**
     * @return mixed
     */
    public function getNotifyAddress()
    {
        return $this->notifyAddress;
    }

    /**
     * @param mixed $notifyAddress
     */
    public function setNotifyAddress($notifyAddress)
    {
        $this->notifyAddress = $notifyAddress;
    }


}
