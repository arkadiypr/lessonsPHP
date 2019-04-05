<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 02.04.19
 * Time: 20:02
 */

class EmailValidator implements ValidatorInterface
{

    public function validate(string $value): bool
    {
        return preg_match('|@.+\.|', $value);
    }

    public function getMessage(): string
    {
        return 'Email должен содержать @';
    }

}