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
        public $isScienceWork = true;

        function getScholarship(){
            if($this->Mark == 5){
                return 200;
            }
            else {
                return 180;
            }
        }
    }
