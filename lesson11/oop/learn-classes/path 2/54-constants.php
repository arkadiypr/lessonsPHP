<?php

class Test
{
    // Задаем константу:
    const CONSTANT = 'test';

    public static function getConstant()
    {
        return self::CONSTANT;
    }
}

echo Test::CONSTANT;
echo '<br>';
echo Test::getConstant();
