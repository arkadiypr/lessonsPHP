<?php

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