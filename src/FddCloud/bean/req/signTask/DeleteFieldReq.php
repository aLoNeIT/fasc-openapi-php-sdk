<?php


namespace FddCloud\bean\req\signTask;

class DeleteFieldReq extends SignTaskBaseReq
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
