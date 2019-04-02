<?php


//Создайте класс Form - оболочку для создания форм.
//Он должен иметь методы input, submit, password, textarea, open, close.
//Каждый метод принимает массив атрибутов.
//Для решения задачи сделайте private метод, который параметром будет принимать массив,
//например, ['type'=>'text', 'value'=>'!!!'] и делать из него строку с атрибутами,
//в нашем случае type="text" value="!!!".

class Form
{
    public function createAttribute(array $array)
    {
        $attr = "";
        foreach ($array as $key => $item) {
            $attr .= " $key='$item'";
        }
        return $attr;
    }

    public function open(array $array)
    {
        $open = $this->createAttribute($array);
        return "<form{$open}><br>";
    }

    public function input(array $array)
    {
        $input = $this->createAttribute($array);
        return "<input{$input}><br>";
    }

    public function submit(array $array)
    {
        $submit = $this->createAttribute($array);
        return "<input type='submit'{$submit}>";
    }

    public function password(array $array)
    {
        $password = $this->createAttribute($array);
        return "<input type='password'{$password}><br>";
    }

    public function textarea(array $array)
    {
        $text = $this->createAttribute($array);
        return "<textarea {$text}></textarea><br>";
    }

    public function close()
    {
        return "</form>";
    }

}