<?php
namespace FddCloud\bean\req\bill;
class GetOrderDetailReq
{
    public $ownerOpenId;
    public $orderNumber;

    /**
     * @return mixed
     */
    public function getOwnerOpenId()
    {
        return $this->ownerOpenId;
    }

    /**
     * @param mixed $ownerOpenId
     */
    public function setOwnerOpenId($ownerOpenId)
    {
        $this->ownerOpenId = $ownerOpenId;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param mixed $orderNumber
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

}
