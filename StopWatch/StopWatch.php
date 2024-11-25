<?php
//Sơ đồ uml
//------------------------
//|       StopWatch      |
//------------------------
//| - startTime: float   |
//| - endTime: float     |
//------------------------
//| + __construct()      |
//| + start(): void      |
//| + stop(): void       |
//| + getElapsedTime(): float |
//| + getStartTime(): float    |
//| + getEndTime(): float      |
//------------------------
class StopWatch{
    private float $start_time;
    private float $end_time;

    public function __construct() {
        $this->start_time = microtime(true);
    }

    public function getStartTime() {
        return $this->start_time;
    }

    public function getEndTime() {
        return $this->end_time;
    }

    public function start(): void {
        $this->start_time = microtime(true);
    }

    public function stop() {
        $this->end_time =    microtime(true);
    }

    public function getElapsedTime() {
        return ($this->end_time - $this->start_time)*1000;
    }
}
?>