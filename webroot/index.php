<?php

// Classes and Objects
//class User
//{
//    public $firstName;
//    public $lastName;
//    public function hello()
//    {
//        echo 'hello ' . $this -> firstName . ' ' . $this -> lastName . "<br>";
//        return $this;
//    }
//
//
//}
//$user1 = new User();
//
//$user1 -> firstName = 'John';
//$user1 -> lastName = 'Doe';
//
//echo $user1 -> firstName . "<br>";
//echo $user1 -> lastName . "<br>";
//
//$user2 = new User();
//
//$user2 -> firstName = 'Jane';
//$user2 -> lastName = 'Doe';
//
//echo $user2 -> firstName . "<br>";
//echo $user2 -> lastName . "<br>";
//
//$user1 -> hello();
//$user2 -> hello();

// $this keyword

//class Car {
//    public $comp;
//    public $numWheels = 4;
//    public $hasSunRoof = true;
//
//    public function hello(){
//        return "Beep I am a <i>" . $this->comp . "</i>, and I am <i>" . $this->color . "</i>";
//    }
//}
//
//$bmw = new Car();
//$mercedes = new Car();
//$bmw -> comp = 'BMW';
//$bmw -> color = 'blue';
//$mercedes -> comp = 'Mercedes Benz';
//$mercedes -> color = 'green';
//
//echo $bmw->hello();
//echo "<br>";
//echo $mercedes->hello();

// Chaining methods and properties

//class Car
//{
//    public $tank;
//    public function fill($float){
//        $this->tank += $float;
//        return $this;
//    }
//    public function ride($float)
//    {
//        $miles = $float;
//        $gallons = $miles/50;
//        $this->tank -= $gallons;
//        return $this;
//    }
//}
//
//$bmw = new Car();
//
//$tank = $bmw -> fill(10) -> ride(40) -> tank;
//echo "The number of gallons left in the tank " . $tank . " gal.";

//class User
//{
//    public $firstName;
//    public $lastName;
//    public function hello()
//    {
//        return "hello," . $this->firstName;
//    }
//    public function register()
//    {
//        echo $this->firstName . " registered";
//        return $this;
//    }
//    public function email()
//    {
//        echo ", emailed.";
//        return $this;
//    }
//}
//
//$user1 = new User();
//$user1 -> firstName = 'Jane';
//$user1 -> lastName = 'Roe';
//
//$user1 -> register() -> email() -> hello();

// Public vs Private

//class Car
//{
//    public $model;
//    public function getModel()
//    {
//        return "The car model is " . $this-> model;
//    }
//}
//
//$mercedes = new Car();
//$mercedes -> model = 'Mercedes';
//echo $mercedes->getModel();