<?php


namespace FddCloud\bean\req\signTask;

require_once 'SignTaskBaseReq.php';

class AddFieldReq extends SignTaskBaseReq
{
    public $fields;

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param mixed $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

}
