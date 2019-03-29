<?php


error_reporting(E_ALL);
ini_set('display_errors', 1);

function read_file($path)
{

    $handle = fopen($path, "r");
    if ($handle) {
        $data = [];
        while (($buffer = fgets($handle, 4096)) !== false) {
            $buffer = explode(' ', $buffer);
//            echo '<pre>';
//            print_r($buffer);
//            echo '</pre>';
            $data[] = $buffer;
        }

        if (!feof($handle)) {
            echo "Ошибка: fgets() неожиданно потерпел неудачу\n";
        }
        fclose($handle);
        return $data;
    }
}


$path = 'users.txt';
$buffer = read_file($path);

echo 'read file';



