<?php

    // PHP. Задачка
    // Створіть приклад успадкування, реалізуйте клас Student та клас
    // Aspirant, аспірант відрізняється від студента наявністю якоїсь
    // наукової роботи.

    // ➢ Клас Student містить змінні: firstName, lastName, group. А
    // також, Mark, що містить середню оцінку.

    // ➢ Створити об'єкт типу Student, яка посилається на об'єкт типу
    // Aspirant.

    // ➢ Створити метод getScholarship() для класу Student, який
    // повертає суму стипендії. Якщо середня оцінка студента дорівнює 5,
    // то сума 100 грн. або 80. Перевизначити цей метод у класі Aspirant.
    // Якщо середня оцінка аспіранта становить 5, то сума 200 грн, інакше
    // 180.

    // ➢ Створити масив типу Student, що містить об'єкти класу Student
    // та Aspirant. Викликати метод getScholarship() для кожного елемента
    // масиву

    class Student{
        public $firstName;
        public $lastName;
        public $group;
        public $Mark;

        public function __construct($fName, $lName, $g, $m){
            $this->firstName = $fName;
            $this->lastName = $lName;
            $this->group = $g;
            $this->Mark = $m;
        }

        function getScholarship(){
            if($this->Mark == 5){
                return 100;
            }
            else {
                return 80;
            }
        }
    }

    class Aspirant extends Student{
        public $isScienceWork;

        public function __construct($fName, $lName, $g, $m, $isw = true){
            $this->firstName = $fName;
            $this->lastName = $lName;
            $this->group = $g;
            $this->Mark = $m;
            $this->isScienceWork = $isw;
        }

        function getScholarship(){
            if($this->Mark == 5){
                return 200;
            }
            else {
                return 180;
            }
        }
    }

    $students = array(
        $student1 = new Student('Igor', 'Kovalenko', 'management', 5),
        $student2 = new Student('Oleg', 'Vovk', 'engineering', 4),
        $aspirant1 = new Aspirant('Mykola', 'Kovalenko', 'engineering', 4, true),
        $aspirant2 = new Aspirant('Denis', 'Poroh', 'management', 5, true)
    );

    foreach ($students as $st){
        $st->getScholarship();
    }

