<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 02.04.19
 * Time: 19:59
 */

class EmptyValidator implements ValidatorInterface
{

    public function validate(string $value): bool
    {
        return !empty($value) ? true : false;
    }

    public function getMessage(): string
    {
        return 'Значение не может быть пустым';
    }
}