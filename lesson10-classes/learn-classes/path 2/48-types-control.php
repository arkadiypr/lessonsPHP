<?php

//1. Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name (название должности) и salary (зарплата на этой должности).+
//2. Создайте несколько объектов класса Post: программист, менеджер, водитель.+
//3. Сделайте класс Employee (работник), в котором будут следующие свойства: name (имя) и surname (фамилия). Пусть начальные значения этих свойств будут передаваться параметром в конструктор.+
//4. Сделайте геттеры и сеттеры для свойств name и surname.+
//5. Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде.+
//6. Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post.+
//7. Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее.+
//8. Выведите на экран имя, фамилию, должность и зарплату созданного работника.+
//9. Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую. Метод должен принимать параметром объект класса Post. Укажите в методе тип принимаемого параметра в явном виде.

class Post
{
    private $namePost;
    private $salary;

    public function __construct($namePost, $salary)
    {
        $this->namePost = $namePost;
        $this->salary = $salary;
    }

    public function getNamePost()
    {
        return $this->namePost;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Employee
{
    private $name;
    private $surname;
    public $post;

    public function __construct($name, $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function changePost(Post $post)
    {
        $this->post = $post;
    }
}

echo '<pre>';

$post1 = new Post('programmer', 3500);
$post2 = new Post('manager', 2000);
$post3 = new Post('driver', 2500);

$postProgrammer = new Employee('Ivan', 'Ivanov', $post1);

print_r($postProgrammer->post);

echo $postProgrammer->getName().' '.$postProgrammer->getSurname().' '.$postProgrammer->post->getNamePost().' '.$postProgrammer->post->getSalary().' y.e.';