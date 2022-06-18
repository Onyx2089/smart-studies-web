<?php

require_once __DIR__ . '/../../../lib/generator/lib.generator.Rand.php';

$res = Rand::password(20);

echo $res . PHP_EOL;
echo strlen($res) . PHP_EOL;