<?php


namespace FddCloud\bean\req\signTask;
class GetPicDownloadUrlReq
{
    public $slicingTicketId;

    /**
     * @return mixed
     */
    public function getSlicingTicketId()
    {
        return $this->slicingTicketId;
    }

    /**
     * @param mixed $slicingTicketId
     */
    public function setSlicingTicketId($slicingTicketId)
    {
        $this->slicingTicketId = $slicingTicketId;
    }

}
