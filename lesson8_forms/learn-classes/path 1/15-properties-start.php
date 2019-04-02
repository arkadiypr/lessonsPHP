<?php

//Создать класс Student с двумя свойствами - name и course (курс студента).
//Сделать так, чтобы имя студента приходило параметром при создании объекта, а курс автоматически принимал значение 1.
//Реализовать метод transferToNextCourse, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.

class Student
{
    private $name;
    private $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function transferToNextCourse()
    {
        $newCourse = $this->course + 1;
        if ($newCourse <= 5) {
            $this->course = $newCourse;
        }
    }
}

$student = new Student('Ivan');
$student->transferToNextCourse();
$student->transferToNextCourse(); // 3
echo '<pre>';
echo $student->getCourse();
