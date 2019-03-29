<?php


abstract class FormField
{
    protected $value;
    protected $name;

    public function __construct( string $name)
    {
        $this->name = $name;
    }

    abstract public function render();


    public function getValue()
    {
        return $this->value;
    }


    public function setValue($value): void
    {
        $this->value = $value;
    }


    public function getName()
    {
        return $this->name;
    }

}