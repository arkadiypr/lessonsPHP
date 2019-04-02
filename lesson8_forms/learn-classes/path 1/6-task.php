<?php
//Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).
//В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
//Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
//Вынесите проверку курса в отдельный private метод isCourseCorrect.

class Student
{
    public $name;
    public $course;

    public function transferToNextCourse()
    {
        $newCourse = $this->course + 1;
        if ($this->isCourseCorrect($newCourse)) {
            $this->course = $newCourse;
        }
    }

    private function isCourseCorrect($course)
    {
        return !($course > 5);
    }

}

$student = new Student();

$student->course = 1;
echo $student->course;
echo '<br>';
$student->transferToNextCourse();
echo $student->course;
echo '<br>';
$student->transferToNextCourse();
echo $student->course;
echo '<br>';
$student->transferToNextCourse();
echo $student->course;
echo '<br>';
$student->transferToNextCourse();
echo $student->course;
echo '<hr>';
$student->transferToNextCourse();
echo $student->course;
$student->transferToNextCourse();
echo '<br>';
echo $student->course;
$student->transferToNextCourse();
echo '<br>';
echo $student->course;
$student->transferToNextCourse();
echo '<br>';
echo $student->course;



