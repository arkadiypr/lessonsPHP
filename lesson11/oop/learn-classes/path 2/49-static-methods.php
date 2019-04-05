<?php
class Math
{
    // Находит сумму:
    public static function getSum($a, $b)
    {
        return $a + $b;
    }

    // Находит произведение:
    public static function getProduct($a, $b)
    {
        return $a * $b;
    }

    // Найдем удвоенную сумму:
    public static function getDoubleSum($a, $b)
    {
        return 2 * self::getSum($a, $b); // используем другой метод
    }
}

echo Math::getSum(1,2) + Math::getProduct(1, 2).'<br>'; // 5
echo Math::getDoubleSum(4,5); // 18

