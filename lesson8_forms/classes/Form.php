<?php


class Form
{
    /**
     * Fields of form
     * @var array
     */
    private $fields;

    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $action;

    public function __construct(string $method, string $action)
    {
        $this -> method = $method;
        $this -> action = $action;
        $this -> fields = [];
    }

    public function render()
    {
        $html = sprintf('<form method="%s>" action="%s"', $this->method, $this->action);
//        $html ='<form method="' . $this->method . '" action="' . $this->action . '">';
        $html .= '</form>';

        return $html;
    }

}