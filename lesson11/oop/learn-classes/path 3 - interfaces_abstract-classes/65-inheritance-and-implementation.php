<?php

interface iProgrammer
{
    public function __construct($name, $salary); // задаем имя и зарплату
    public function getName(); // получить имя
    public function getSalary(); // получить зарплату
    public function getLangs(); // получить массив языков, которые знает программист
    public function addLang($lang); // добавить язык в массив языков
}

class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Programmer extends Employee implements iProgrammer
{

    private $langs;

    public function getLangs()
    {
        $str_langs = implode(', ', $this->langs);
        return $str_langs;
    }

    public function addLang($lang)
    {
        $this->langs[] = $lang;
    }

}

$programmer = new Programmer('Ivan', 4000);

echo $programmer->getName();
echo '<br>';
echo $programmer->getSalary();
echo '<br>';
print_r($programmer->getLangs());
$programmer->addLang('PHP');
$programmer->addLang('JS');
$programmer->addLang('HTML');
echo '<br>';
print_r($programmer->getLangs());
