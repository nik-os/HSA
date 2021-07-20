<?php
require_once __DIR__ . '/vendor/autoload.php';

use Pheanstalk\Pheanstalk;

$message = array(
    'text' => 'Some number - ' . rand(0,100)
);

$pheanstalk =  Pheanstalk::create('127.0.0.1');

$start_time = microtime(true);
for($i=0; $i<10000; $i++) {
    $pheanstalk
    ->useTube('message_queue')
    ->put(json_encode(['text' => 'Sort number - ' . $i]));
}

$end_time = microtime(true);
$execution_time = ($end_time - $start_time);
echo " Execution time of script = ".$execution_time." sec";
