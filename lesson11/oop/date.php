<?php

$timestamp = time();

echo date('D d.m.Y H:i:s', $timestamp) . "\n";
echo date('D d.m.Y H:i:s', $timestamp + 60) . "\n";
echo date('D d.m.Y H:i:s', $timestamp + 3600 * 24) . "\n";


echo date('D d.m.Y H:i:s', strtotime('14.02.1980', $timestamp)) . "\n";
echo '--------------------------------------------' .  "\n";

// Новый способ!

$now = new DateTime();
echo $now->format('D d.m.Y H:i:s') .  "\n";

$date = new DateTime('2019-03-29 20:32:00');
echo $date->format('D d.m.Y H:i:s') .  "\n";

$date->add(new DateInterval('P3DT2H'));
echo $date->format('D d.m.Y H:i:s') .  "\n";

$date->modify('+3 days');
