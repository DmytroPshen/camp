<?php

    class Animal{
       var $food;
       var $location;

       function makeNoise(){
           echo "Така тварина спить.";
       }
       function eat(){}
       function sleep(){}
    }

    class Dog extends Animal{
        var $poroda;
        function makeNoise(){
            echo "Пес спить.";
        }
        function eat(){
            echo "Пес їсть кісточки";
        }
    }
    class Cat extends Animal{
        var $sex;
        function makeNoise(){
            echo "Кіт спить.";
        }
        function eat(){
            echo "Кінь їсть траву";
        }
    }
    class Horse extends Animal{
        var $child;
        function makeNoise(){
            echo "Кінь спить.";
        }
        function eat(){
            echo "Кіт їсть рибку";
        }
    }

    class Veterenar{
        function threadAnimal(Animal $animal): void {
            $animal->makeNoise();
            $animal->food;
            $animal->location;
        }
    }

    $arrayAnimals =
        [$animal_0 = new Dog(),
        $animal_1 = new Cat(),
        $animal_2 = new Horse()];

        for($i = 0; $i < 3; $i++){
            $vet = new Veterenar();
            $vet->threadAnimal($arrayAnimals[$i]);
        }