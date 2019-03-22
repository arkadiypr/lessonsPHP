<form>
    <input name="username">
    <input name="email">
    <textarea name="message"></textarea>
    <button type="submit">Send</button>
</form>



<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


//$a = 4;
//$c = & $b;
//$c = 8;
//$a = $c--;
//
//echo 'a= '.$a.'<br>'; //a=8
//echo 'b= '.$b.'<br>'; //b=7
//echo 'c= '.$c.'<br>'; //c=7
//$b = ++$b;
//echo '----------------- b= '.$b.'<br>'; //b=8
//echo 'c= '.$c.'<br>'; //c=8



echo '<pre>';


$a = 10;

$b = 10;

if ($a - $b > 0) {
    echo 'a > b';
} else if ($a === $b) {
    echo 'a = b';
} else {
    echo 'a < b';
}

echo '<br>';

echo ($a - $b > 0) ? 'a > b' : 'a < b';

echo '<br>';

switch (true) {
    case $a - $b > 0:
        echo 'a > b';
        break;
    case $a - $b < 0:
        echo 'a < b';
        break;
    default:
        echo 'a = b';
}

echo '<br>';

for ($i = 1; $i <= 11; $i++) {
    $k = 0;
    if ($i == 1) {
        $k += 1;
    }
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j === 0) {
            $k += 1;
        }
    }
    if ($k === 0) {
        echo "{$i}<br>";
    }
}

echo '<br>';

$arr = ['One', 'Two', 'Three', 'Four', 'Five'];
$i = 0;
while ( $i < count($arr) ) {
    echo PHP_EOL;
    echo $arr[$i];
    $i++;
}

echo '<br>';

$arr = array('One', 'Two', 'Three');

foreach ($arr as $item) {
    echo PHP_EOL;
    echo $item;
}

echo '<br>';
echo '<br>';

$arr = array(
    'first'  => 1,
    'second' => 2,
    'third'  => 3,
    'fourth' => 4,
    'fifth'  => 5
);

foreach ($arr as $key => $val) {
    echo $key . ' element is = ' . $val . '<br>';
}

echo '<br>';
echo '<br>';

//Создать массив из 10 любых числовых значений.
//При помощи foreach вывести на экран те значения, которые делятся на 3

$arr = [4, 18, 12, 5, 35, 42, 9, 50, 37, 45];

foreach ($arr as $value) {
    if ($value % 3 == 0) :
        echo $value . PHP_EOL;
    endif;
}

echo '<br>';
echo '<br>';

for ($i = 10; $i <= 20; $i++) {
    echo  "Check for {$i} ... ";
    if ($i % 3 == 0) {
        echo 'gotcha! <br>';
        continue;
    }
    echo 'nope <br>';
}

echo '<br>';
echo '<br>';

for ($i = 200; $i <= 400; $i++) {
    for ($j = 2; $j < $i; $j++) {
//        echo $i . ' ' . $j . PHP_EOL;
        if ($i % $j == 0) {
//            echo $i . ' - не простое число' . PHP_EOL;
            break;
        }
        continue;
    }
}


$f = fopen('test.txt', 'w');
fwrite($f, 'Hello world' . PHP_EOL . 'This is new string');
fclose($f);

echo '</pre>';

function print_array (array $array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

$arr = [1, 2, 3, 4, 5, 6];

print_array($arr);

function print_array2 (array $array, $x = 1)
{
    if ($x == 1) {
        echo '<pre>';
        var_dump($array);
        echo '</pre>';
    } else {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }
}

print_array2($arr, 0);
print_array2($arr, 1);

function editArray(array & $array)
{
//    $array['count_array'] = count($array);
    array_push($array, count($array));
}

editArray($arr);


print_array($arr);

echo '<br>';

function isPrime($value)
{
    if ($value <= 1) {
        $res = 'not';
    } else {
        $k = 0;
        for ($j = 2; $j < $value; $j++) {
            if ($value % $j === 0) {
                $k += 1;
            }
        }

        if ($k == 0) {
            $res = 'yes';
        } else {
            $res = 'not';
        }
    }

    return $res;
}

echo isPrime(23);

//Определить рекурсивную функцию - аналог функции print_r

