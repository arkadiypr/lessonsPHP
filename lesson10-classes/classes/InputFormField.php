<?php

class InputFormField extends FormField
{

    protected $type = 'text';

    /**
     * @var string
     */
    protected $label;

    /**
     * @var ValidatorInterface
     */
    protected $validators;

    public function __construct(string $name, string $label)
    {
        parent::__construct($name);

        $this->name = $label;
        $this->validators = [];
    }

    public function render() : string
    {
        $html = '<div class="row">';
        $html .= sprintf('<label for="%s">%s</label>', $this->name, $this->label);
        $html .= sprintf(
            '<input type="%s" id="%s" name="%s" value="%s" class="%s">', $this->type,
            $this->name, $this->name, $this->value, Registry::getInstance()->getFormElementClass()
        );
        $html .= '</div>';

        return $html;
    }

    public function addValidator(ValidatorInterface $validator)
    {
        $this->validators = $validator;
    }

    public function validate() : bool
    {
        $hasErrors = false;

        foreach ($this->validators as $validator) {
            if ($validator->validate($this->value) === false) {
                $hasErrors = true;
            }
        }

        return $hasErrors;
    }

}