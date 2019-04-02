<?php


class FormButton extends FormField
{

	public function render(): string
	{
		return '<button>' . $this->name . '</button>';
	}

}
