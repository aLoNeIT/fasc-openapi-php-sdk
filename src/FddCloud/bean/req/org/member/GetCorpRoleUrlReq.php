<?php
namespace FddCloud\bean\req\org\member;
class GetCorpRoleUrlReq extends MemberBaseReq
{
    public $clientUserId;

    /**
     * @return mixed
     */
    public function getClientUserId()
    {
        return $this->clientUserId;
    }

    /**
     * @param mixed $clientUserId
     */
    public function setClientUserId($clientUserId)
    {
        $this->clientUserId = $clientUserId;
    }


}
