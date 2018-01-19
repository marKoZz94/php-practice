<?php

// Classes and Objects
class User
{
    public $firstName;
    public $lastName;
    public function hello()
    {
        echo 'hello ' . $this -> firstName . ' ' . $this -> lastName . "<br>";
        return $this;
    }


}
$user1 = new User();

$user1 -> firstName = 'John';
$user1 -> lastName = 'Doe';

echo $user1 -> firstName . "<br>";
echo $user1 -> lastName . "<br>";

$user2 = new User();

$user2 -> firstName = 'Jane';
$user2 -> lastName = 'Doe';

echo $user2 -> firstName . "<br>";
echo $user2 -> lastName . "<br>";

$user1 -> hello();
$user2 -> hello();

// $this keyword

class Car {
    public $comp;
    public $numWheels = 4;
    public $hasSunRoof = true;

    public function hello(){
        return "Beep I am a <i>" . $this->comp . "</i>, and I am <i>" . $this->color . "</i>";
    }
}

$bmw = new Car();
$mercedes = new Car();
$bmw -> comp = 'BMW';
$bmw -> color = 'blue';
$mercedes -> comp = 'Mercedes Benz';
$mercedes -> color = 'green';

echo $bmw->hello();
echo "<br>";
echo $mercedes->hello();