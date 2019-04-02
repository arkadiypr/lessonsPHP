<?php
/**
 * Created by PhpStorm.
 * User: skillup
 * Date: 02.04.19
 * Time: 19:29
 */

class Registry
{
    /**
     * @var Registry
     */
    private static $instance;

    /**
     * @var string
     */
    private $formElementClass;

    private function __construct()
    {
    }

    static public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new Registry();
        }

        return self::$instance;
    }

    /**
     * @return string
     */
    public function getFormElementClass(): string
    {
        return $this->formElementClass;
    }

    /**
     * @param string $formElementClass
     */
    public function setFormElementClass(string $formElementClass): void
    {
        $this->formElementClass = $formElementClass;
    }


}