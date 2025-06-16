<?php
namespace FddCloud\bean\req\seal;
class MemberInfo
{
    public $memberIds;

    public $grantStartTime;

    public $grantEndTime;

    /**
     * @return mixed
     */
    public function getMemberIds()
    {
        return $this->memberIds;
    }

    /**
     * @param mixed $memberIds
     */
    public function setMemberIds($memberIds)
    {
        $this->memberIds = $memberIds;
    }

    /**
     * @return mixed
     */
    public function getGrantStartTime()
    {
        return $this->grantStartTime;
    }

    /**
     * @param mixed $grantStartTime
     */
    public function setGrantStartTime($grantStartTime)
    {
        $this->grantStartTime = $grantStartTime;
    }

    /**
     * @return mixed
     */
    public function getGrantEndTime()
    {
        return $this->grantEndTime;
    }

    /**
     * @param mixed $grantEndTime
     */
    public function setGrantEndTime($grantEndTime)
    {
        $this->grantEndTime = $grantEndTime;
    }


}