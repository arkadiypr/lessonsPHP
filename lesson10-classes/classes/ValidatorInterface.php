<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 02.04.19
 * Time: 19:49
 */

interface ValidatorInterface
{
    public function validate(string $value):bool;

    public function getMessage():string ;
}