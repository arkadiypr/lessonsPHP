<?php

class InputFormField extends FormField implements ValidatedFieldInterface
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

    protected $errorMessage;

    public function __construct(string $name, string $label)
    {
        parent::__construct($name);

        $this->name = $label;
        $this->validators = [];
        $this->errorMessage = '';
    }

    public function render() : string
    {
        $html = '<div class="row">';
        $html .= sprintf('<label for="%s">%s</label>', $this->name, $this->label);
        $html .= sprintf(
            '<input type="%s" id="%s" name="%s" value="%s" class="%s">', $this->type,
            $this->name, $this->name, $this->value, Registry::getInstance()->getFormElementClass()
        );

        if ($this->errorMessage) {
            $html .= '<p class="error">' . $this->errorMessage . '</p>';
        }

        $html .= '</div>';

        return $html;
    }

    public function addValidator(ValidatorInterface $validator)
    {
        $this->validators = $validator;
    }

    public function validate() : bool
    {
        if ($this->value === null) {
            return true;
        }

        $hasErrors = false;

        foreach ($this->validators as $validator) {
            if ($validator->validate($this->value) === false) {
                $hasErrors = true;
                $this->errorMessage = $validator->getMessage();
            }
        }

        return $hasErrors;
    }

}