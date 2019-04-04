<?php
class Test
{
    public static $staticProperty = 'static'; // статическое свойство
    public $usualProperty = 'usual'; // обычное свойство

    // Обычный метод:
    public static function method()
    {
        var_dump(self::$staticProperty); // выведет 'static'
        var_dump($this->usualProperty); // внутри статических методов недоступен $this. Это происходит из-за того, что статические методы могут вызываться вне контекста объекта, просто обращаясь к имени класса.
    }
}

$test = new Test;
$test->method();