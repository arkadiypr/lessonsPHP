<?php
//Дополните класс Worker из предыдущей задачи private методом checkAge,
//который будет проверять возраст на корректность (от 1 до 100 лет).
//Этот метод должен использовать метод setAge перед установкой нового возраста
//(если возраст не корректный - он не должен меняться).

class Worker
{
    private $name;
    private $age;
    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    private function checkAge($age)
    {
        return $age >=1 && $age <=100;
    }
}

$worker = new Worker();
$worker->setAge(25);
$worker->setAge(0);
$worker->setAge(101);
echo $worker->getAge();
