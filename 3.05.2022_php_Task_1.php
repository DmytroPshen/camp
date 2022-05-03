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
        function threadAnimal($animal): void {

        }
    }
