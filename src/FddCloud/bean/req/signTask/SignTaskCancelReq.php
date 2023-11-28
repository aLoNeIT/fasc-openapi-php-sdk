<?php


namespace FddCloud\bean\req\signTask;

class SignTaskCancelReq extends SignTaskBaseReq
{
    public $terminationNote;

    /**
     * @return mixed
     */
    public function getTerminationNote()
    {
        return $this->terminationNote;
    }

    /**
     * @param mixed $terminationNote
     */
    public function setTerminationNote($terminationNote)
    {
        $this->terminationNote = $terminationNote;
    }


}
