<?php

class Stopwatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime;
    }

    public function start()
    {
        $this->startTime = microtime(true);
        return $this->startTime;
    }

    public function end()
    {
        $this->endTime = microtime(true);
        return $this->endTime;
    }

    public function getElapsedTime()
    {
        return $this->endTime - $this->startTime;
    }
}

$arr = [];
function random()
{
    return rand(0, 10000);
}

for ($i = 0; $i < 10000; $i++) {
    array_push($arr, random());
}

$stopWatch = new StopWatch ();
$stopWatch->start();

for ($i = 0; $i < count($arr) - 2; $i++)
    $imin = $arr[$i];
for ($j = 1; $j < count($arr) - 1; $j++) {
    if ($arr[$j] < $imin) {
        $imin = $arr[$j];
        $temp = $arr[$i];
        $arr[$i] = $arr[$j];
        $arr[$j] = $temp;
    }
}
$stopWatch -> end();
echo $stopWatch ->getElapsedTime();
