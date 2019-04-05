<?php

//В результате увидим ссылку:
//
//<a href="..." class="www">ссылка</a>

class Tag
{
    private $name;
    private $text;
    private $attrs;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function setText($text)
    {
        $this->text = $text;
        return $this;
    }

    public function setAttr($attr, $value)
    {
        $this->attrs[$attr] = $value;
        return $this;
    }

    public function show()
    {
        $attrsString = $this->getAttrsString($this->attrs);

        $name = $this->name;
        $text = $this->text;

        echo "<$name $attrsString>$text</$name>";
    }

    /*
        Принимает массив,
        например ['href'=>'index.php', 'class'=>'active'],
        а возвращает строку 'href="index.php" class="active"':
    */
    private function getAttrsString($attrs)
    {
        $attrsString = '';

        foreach ($attrs as $key => $item) {
            $attrsString .= "$key='$item'";
        }

        return $attrsString;
    }
}

$tag = new Tag('a');
$tag->setText('ссылка')->setAttr('href', '29.php')->setAttr('class', 'www')->show();