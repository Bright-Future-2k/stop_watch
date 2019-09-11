<?php

class Stop_watch
{
    protected $startTime;
    protected $endTime;


    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime()
    {
        $this->endTime = microtime(true);
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime()
    {
        $this->startTime = microtime(true);
    }
    public function getTime(){
        $this->endTime = ($this->getStartTime()-$this->getEndTime())*1000;
    }
}