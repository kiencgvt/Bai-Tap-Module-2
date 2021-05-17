<?php

class StopWatch
{
    private $startTime, $endTime;

    function getStartTime()
    {
        return $this->startTime;
    }

    function getEndTime()
    {
        return $this->endTime;
    }

    function __construct()
    {
        $this->startTime = microtime(true);
    }

    function start()
    {
        $this->startTime = microtime(true);
    }

    function stop()
    {
        $this->endTime = microtime(true);
    }

    function getElapsedTime()
    {
        return ($this->endTime - $this->startTime) * 1000;
    }
}

