<?php
namespace FddCloud\bean\req\org\counterpart;
use Serializable;

class GetCounterpartManageUrlReq implements Serializable
{
    private $openCorpId;
    private $clientUserId;
    private $redirectUrl;

    /**
     * @return mixed
     */
    public function getOpenCorpId()
    {
        return $this->openCorpId;
    }

    /**
     * @param mixed $openCorpId
     */
    public function setOpenCorpId($openCorpId)
    {
        $this->openCorpId = $openCorpId;
    }

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

    /**
     * @return mixed
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param mixed $redirectUrl
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
    }


    public function serialize()
    {
        // TODO: Implement serialize() method.
        return json_encode(
            [
                'openCorpId'=>$this->openCorpId,
                'clientUserId'=>$this->clientUserId,
                'redirectUrl'=>$this->redirectUrl
            ]
        );
    }

    public function unserialize($data)
    {
        // TODO: Implement unserialize() method.
        $data = json_decode($data,true);
        $this->openCorpId = $data['openCorpId'];
        $this->clientUserId = $data['clientUserId'];
        $this->redirectUrl = $data['redirectUrl'];
    }
}
