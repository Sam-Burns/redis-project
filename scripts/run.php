<?php

require_once __DIR__ . '/../vendor/autoload.php';

$redis = new \RedisProject\Redis();
$redis->execute();
