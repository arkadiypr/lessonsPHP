<?php


class Form
{
    /**
     * Fields of form
     * @var array FormField
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
        $html = sprintf('<form method="%s" action="%s"></form>', $this->method, $this->action);
//        $html ='<form method="' . $this->method . '" action="' . $this->action . '">';

        foreach ($this->fields as $field) {
            $html .= $field->render();
        }

        $html .= '</form>';

        return $html;
    }

    public function addField(FormField $field)
    {
        $this->fields[$field->getName()] = $field;
    }

}