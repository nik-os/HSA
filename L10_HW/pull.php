<?php
require __DIR__ . '/vendor/autoload.php';
use Pheanstalk\Pheanstalk;

$pheanstalk = Pheanstalk::create('127.0.0.1');
$pheanstalk->watch('message_queue');
$start_time = microtime(true);

try {
    $count = 9000;
    while ($count > 0) {
        $job = $pheanstalk->reserve();
        $jobPayload = $job->getData();
        $pheanstalk->touch($job);
        $pheanstalk->delete($job);
        $count--;
    }
}
catch(\Exception $e) {
    $pheanstalk->release($job); 
}

$end_time = microtime(true);
$execution_time = ($end_time - $start_time);
echo " Execution time of script = ".$execution_time." sec";