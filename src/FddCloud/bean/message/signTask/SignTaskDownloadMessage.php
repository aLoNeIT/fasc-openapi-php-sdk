<?php
namespace FddCloud\bean\message\signTask;

/**
 * 签署文档批量下载事件
 * 集成方批量下载签署文档，当系统生成文档压缩包后，通过该事件回调给应用，事件ID: sign-task-download
 */
class SignTaskDownloadMessage extends MessageBase
{
    public $downloadId;
    public $downloadUrl;
    public $status;

    /**
     * @return mixed
     */
    public function getDownloadId()
    {
        return $this->downloadId;
    }

    /**
     * @param mixed $downloadId
     */
    public function setDownloadId($downloadId)
    {
        $this->downloadId = $downloadId;
    }

    /**
     * @return mixed
     */
    public function getDownloadUrl()
    {
        return $this->downloadUrl;
    }

    /**
     * @param mixed $downloadUrl
     */
    public function setDownloadUrl($downloadUrl)
    {
        $this->downloadUrl = $downloadUrl;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
}
