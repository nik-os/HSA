<?php

$message = array(
    'text' => 'Some number - ' . rand(0,100)
);

try {
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6378);
    $start_time = microtime(true);
    for($i=0; $i<10000; $i++) {
        $redis->rpush("message_queue", json_encode(['text' => 'Sort number - ' . $i]));
    }

    $end_time = microtime(true);
    $execution_time = ($end_time - $start_time);
    echo " Execution time of script = ".$execution_time." sec";

} catch (Exception $e) {
    echo $e->getMessage();
}


