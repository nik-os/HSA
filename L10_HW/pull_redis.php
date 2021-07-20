<?php

$redis = new Redis();
$redis->connect('127.0.0.1', 6378);
$start_time = microtime(true);

            
try {
    $count = 9000;
    while ($count > 0) {
        $data = $redis->lpop('message_queue');
        $data  = json_decode($data, true);
        
        $count--;
    }
}
catch(\Exception $e) {
    echo $e->getMessage();
}

$end_time = microtime(true);
$execution_time = ($end_time - $start_time);
echo " Execution time of script = ".$execution_time." sec";