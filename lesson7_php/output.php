<?php
$isConsole = isset($argc);
$lineBreak = $isConsole ? PHP_EOL : '<br>';

if ($isConsole) {
    if (!isset($argv[1])) {
        die('Day is empty. Please add console argument (from 1 to 7)' . $lineBreak);
    }
    $day = $argv[1];
} else {
    if (!isset($_GET['day'])) {
        die('Day is empty. Please add "day" query parameter (from 1 to 7)');
    }
    $day = $_GET['day'];
}

echo 'Defining day of the week description ... ' . $lineBreak;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Working day'; break;
    case 6:
    case 7:
        echo 'Weekend'; break;
    default:
        echo 'Invalid day: please use 1...7';
}

echo $lineBreak;