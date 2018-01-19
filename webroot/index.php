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

//class Car
//{
//    private $model;
//    public function setModel($model)
//    {
//        $this -> model = $model;
//    }
//    public function getModel()
//    {
//        return "The car model is " . $this-> model;
//    }
//}
//$mercedes = new Car();
//$mercedes -> setModel('Mercedes');
//echo $mercedes->getModel();


//class User
//{
//    private $firstName;
//    public function setFirstName($firstName)
//    {
//        $this -> firstName = $firstName;
//    }
//    public function getFirstName()
//    {
//        return $this -> firstName;
//    }
//}
//
//$user1 = new User();
//$user1 -> setfirstName('Joe');
//echo $user1 -> getfirstName();

// Construct magic method
//class Car
//{
//    private $model;
//    public function __construct($model)
//    {
//        $this -> model = $model;
//    }
//    public function getCarModel()
//    {
//        return ' The car model is ' . $this -> model;
//    }
//}
//
//$car1 = new Car('Mercedes');
//echo $car1 -> getCarModel();

//class Car
//{
//    private $model = '';
//    public function __construct($model = null)
//    {
//        if($model)
//        {
//            $this -> model = $model;
//        }
//    }
//    public function getCarModel()
//    {
//        return ' The car model is ' . $this -> model;
//    }
//}
//
//$car1 = new Car('Mercedes');
//echo $car1 -> getCarModel();

//class Car
//{
//    private $model = '';
//    public function __construct($model = null)
//    {
//        if($model)
//        {
//            $this -> model = $model;
//        }
//    }
//    public function getCarModel()
//    {
//        return ' The ' .  __class__ . " model is: " . $this->model;
//    }
//}
//
//$car1 = new Car('Mercedes');
//echo $car1 -> getCarModel();

//class User
//{
//    private $firstName = '';
//    private $lastName = '';
//    public function __construct($firstName = null, $lastName = null)
//    {
//        $this -> firstName = $firstName;
//        $this -> lastName = $lastName;
//    }
//    public function getFullName()
//    {
//        return ' The ' .  __class__ . " name is: " . $this->firstName . ' ' . $this->lastName;
//    }
//}
//
//$user1 = new User('John', 'Doe');
//echo $user1 -> getFullName();


// Inheritance in OOP

//class Car
//{
//    private $model;
//    public function setModel($model)
//    {
//        $this -> model = $model;
//    }
//    public function hello()
//    {
//        return 'beep! I am ' . $this -> model;
//    }
//}
//
//class SportsCar extends Car
//{
//
//}
//
//$SportsCar = new SportsCar();
//$SportsCar -> setModel('Mercedes Benz');
//echo $SportsCar -> hello();

//class Car
//{
//    private $model;
//    public function setModel($model)
//    {
//        $this -> model = $model;
//    }
//    public function getModel()
//    {
//        return $this -> model;
//    }
//}
//
//class SportsCar extends Car
//{
//    private $style = 'fast and furious';
//    public function DriveItWithStyle()
//    {
//        return "Drive a " . $this -> getModel() . ' ' . $this -> style;
//    }
//
//}
//
//$SportsCar = new SportsCar();
//$SportsCar -> setModel('Ferrari');
//echo $SportsCar -> DriveItWithStyle();

// Protected

//class Car
//{
//    protected $model;
//    public function setModel($model)
//    {
//        $this -> model = $model;
//    }
//}
//
//class SportsCar extends Car
//{
//    public function hello()
//    {
//        return "Beep! I am a  " . $this -> model;
//    }
//
//}
//
//$SportsCar = new SportsCar();
//$SportsCar -> setModel('Ferrari');
//echo $SportsCar -> hello();

//class Car
//{
//    public function hello()
//    {
//        return 'Beep';
//    }
//}
//
//class SportsCar extends Car
//{
//    public function hello()
//    {
//        return 'Hallo';
//    }
//
//}
//
//$SportsCar = new SportsCar();
//echo $SportsCar -> hello();

//class User
//{
//    protected $username;
//    public function setUsername($username)
//    {
//        $this -> username = $username;
//    }
//}
//
//class Admin extends User
//{
//    public function expressYourRole()
//    {
//        return 'Admin';
//    }
//    public function sayHello()
//    {
//        return "Hello Admin, " . $this -> username;
//    }
//}
//
//$admin1 = new Admin();
//$admin1 -> setUsername('Balthazar');
//echo $admin1 -> sayHello();

// Abstract classes and methods

//abstract class Car
//{
//    protected $tankVolume;
//
//    public function setTankVolume($volume)
//    {
//        $this -> tankVolume = $volume;
//    }
//    abstract public function calcNumMilesOnFullTank();
//
//}
//
//class Honda extends Car
//{
//    public function calcNumMilesOnFullTank()
//    {
//        $miles = $this -> tankVolume*30;
//        return $miles;
//    }
//}
//
//class Toyota extends Car
//{
//    public function calcNumMilesOnFullTank()
//    {
//        return $miles = $this -> tankVolume*33;
//    }
//    public function getColor()
//    {
//        return 'beige';
//    }
//}
//
//$toyota1 = new Toyota();
//$toyota1 -> setTankVolume(10);
//echo $toyota1 -> calcNumMilesOnFullTank();
//echo "<br>";
//echo $toyota1 -> getColor();

//abstract class User
//{
//    protected $username;
//
//    public function setUsername($username)
//    {
//        $this -> username = $username;
//    }
//
//    public function getUsername()
//    {
//
//    }
//
//    abstract public function stateYourRoll();
//}
//
//class Admin extends User{
//    public function StateYourRoll()
//    {
//        return $username = $this -> username . ' Admin';
//    }
//}
//
//class Viewer extends User{
//    public function StateYourRoll()
//    {
//
//    }
//}
//
//$admin1 = new Admin();
//$admin1 -> setUsername('Baltazar');
//echo $admin1 -> StateYourRoll();

// Interfaces

//interface Car
//{
//    public function setModel($name);
//    public function getModel();
//}
//
//interface Vehicle
//{
//    public function setHasWheels($bool);
//    public function getHasWheelsl();
//}
//
//class MiniCar implements Car
//{
//    private $model;
//    private $hasWheels;
//    public function setModel($name)
//    {
//        $this -> model = $name;
//    }
//    public function  getModel()
//    {
//        return $this -> model;
//    }
//
//    public function setHasWheels($bool)
//    {
//        $this -> hasWheels = $bool;
//    }
//    public function  getHasWheels()
//    {
//        return ($this -> hasWheels)? "Has Wheels" : "No wheels";
//    }
//}

//interface Shape
//{
//    public function calcArea();
//}
//
//class Circle implements Shape
//{
//    private $radius;
//    public function __construct($radius)
//    {
//        $this -> radius = $radius;
//    }
//    public function calcArea()
//    {
//        return $this -> radius * $this -> radius * pi();
//    }
//}
//
//class Rectangle implements Shape
//{
//    private $height;
//    private $weight;
//    public function __construct($height, $weight)
//    {
//        $this -> weight = $weight;
//        $this -> height = $height;
//    }
//    public function calcArea()
//    {
//        return $this -> weight * $this -> height;
//    }
//}
//
//$circ = new Circle(3);
//$rect = new Rectangle(3, 4);
//echo $circ -> calcArea();
//echo $rect -> calcArea();

//class User
//{
//    protected $username;
//
//    public function setUsername($name){
//        $this -> username = $name;
//    }
//    public function getUsername()
//    {
//        return $this -> username;
//    }
//}
//
//interface Author
//{
//    public function setAuthorPrivileges($array);
//    public function getAuthorPrivileges();
//}
//
//interface Editor
//{
//    public function setEditorPrivileges($array);
//    public function getEditorPrivileges();
//}
//
//class AuthorEditor extends User implements Author, Editor
//{
//    private $authorPrivilegesArray = array();
//    private $editorPrivilegesArray = array();
//
//    public function setAuthorPrivileges($array)
//    {
//        $this -> authorPrivilegesArray = $array;
//    }
//
//    public function getAuthorPrivileges()
//    {
//       return $this -> authorPrivilegesArray;
//    }
//
//    public function setEditorPrivileges($array)
//    {
//        $this -> editorPrivilegesArray = $array;
//    }
//
//    public function getEditorPrivileges()
//    {
//        return $this -> editorPrivilegesArray;
//    }
//}
//
//$user1 = new AuthorEditor();
//$user1 -> setUsername('Balthazar');
//$user1 -> setAuthorPrivileges(array('write text, add punctuation'));
//$user1 -> setEditorPrivileges(array('write text, add punctuation'));
//
//$userName = $user1 -> getUsername();
//$userPrivileges = array_merge($user1 -> getAuthorPrivileges(),
//    $user1 -> getEditorPrivileges());
//
//echo $userName . ' has the following privileges: ';
//foreach ($userPrivileges as $privilege)
//{
//    echo " {$privilege},";
//}

// Polymorphism

//abstract class User
//{
//    protected $scores = 0;
//    protected $numberOfArticles = 0;
//
//    public function setNumberOfArticles($int)
//    {
//        $this -> numberOfArticles = $int;
//    }
//
//    public function getNumberOfArticles()
//    {
//        return $this -> numberOfArticles;
//    }
//
//    abstract public function calcScores();
//}
//
//class Author extends User
//{
//    public function calcScores()
//    {
//        return $this -> numberOfArticles * 10 + 20;
//    }
//}
//
//class Editor extends User
//{
//    public function calcScores()
//    {
//        return $this -> numberOfArticles * 6 + 15;
//    }
//}
//
//$author1 = new Author();
//$author1 -> setNumberOfArticles(8);
//echo $author1 -> calcScores();
//echo "<br>";
//$editor1 = new Editor();
//$editor1 -> setNumberOfArticles(15);
//echo $editor1 -> calcScores();

// Type Hinting
//function calcNumMilesOnFullTank(array $models)
//{
//
//    foreach ($models as $item)
//    {
//        echo $carModel = $item[0];
//        echo " : ";
//        echo $numberOfMiles = $item[1] * $item[2];
//        echo "<br>";
//    }
//}
//
//calcNumMilesOnFullTank(array(
//    array("Toyota", 12, 44),
//    array("BMW", 13, 41),
//));

//class Car
//{
//    protected $driver;
//    public function __construct(Driver $driver)
//    {
//        $this -> driver = $driver;
//    }
//}
//
//class Driver{}
//
//$driver1 = new Driver();
//$car1 = new Car ($driver1);

//class Bmw
//{
//    protected $model;
//    protected $rib;
//    protected $height;
//
//    public function __construct($model, $rib, $height)
//    {
//        $this -> model = $model;
//        $this -> rib = $rib;
//        $this -> height = $height;
//    }
//
//    public function calcTankVolume()
//    {
//        return $this -> rib * $this -> rib * $this -> height;
//    }
//
//    function calcTankPrice(Bmw $bmw, $pricePerGalon)
//    {
//        return $bmw -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
//    }
//}
//
//$bmw1 = new Bmw('62182791', 14, 21);
//echo $bmw1 -> calcTankPrice($bmw1, 3);

// Type hinting for interfaces

//abstract class Car
//{
//    protected $model;
//    protected $height;
//
//    abstract public function calcTankVolume();
//
//    public function calcTankPrice(Car $car, $pricePerGalon)
//    {
//        return $car -> calcTankVolume() * 0.0043290 * $pricePerGalon . "$";
//    }
//}
//
//class Bmw extends Car
//{
//    protected $rib;
//
//    public function __construct($model, $rib, $height)
//    {
//        $this -> model = $model;
//        $this -> rib = $rib;
//        $this -> height = $height;
//    }
//
//    public function calcTankVolume()
//    {
//        return $this -> rib * $this -> rib * $this -> height;
//    }
//}
//
//class Mercedes extends Car
//{
//    protected $radius;
//
//    public function __construct($model, $radius, $height)
//    {
//        $this -> model = $model;
//        $this -> radius = $radius;
//        $this -> height = $height;
//    }
//
//    public function calcTankVolume()
//    {
//        return $this -> radius * $this -> radius * pi() * $this -> height;
//    }
//}
//
//$bmw1 = new Bmw('62182791', 14, 21);
//echo $bmw1 -> calcTankPrice($bmw1, 3);
//echo "<br>";
//$mercedes1 = new Mercedes('12189796', 7, 28);
//echo $mercedes1 -> calcTankPrice($mercedes1, 3);

//interface User
//{
//    public function setUsername($username);
//    public function getUsername();
//
//    public function setGender($gender);
//    public function getGender();
//
//
//}
//
//class Commentator implements User
//{
//    protected $username = '';
//    protected $gender = 'none of your business!';
//
//    public function setUsername($name)
//    {
//        $this -> username = (is_string($name))? $name : 'N/A';
//    }
//    public function getUsername()
//    {
//        return $this -> username;
//    }
//
//    public function setGender($gender)
//    {
//        $gendersArray = array('female', 'male', 'other');
//
//        if (in_array($gender, $gendersArray))
//        {
//            $this -> gender = $gender;
//        }
//    }
//
//    public function getGender()
//    {
//        return $this -> gender;
//    }
//
//    function addMrOrMrsToUsername(User $user)
//    {
//        $userName = $user -> getUsername();
//        $userGender = $user -> getGender();
//
//        if ($userGender === 'female')
//        {
//            return "Mrs. " . $userName;
//        }
//        else if ($userGender === 'male')
//        {
//            return "Mr. " . $userName;
//        }
//        return $userName;
//    }
//}
//
//$user1 = new Commentator();
//$user1 -> setUsername('Jane');
//$user1 -> setGender('female');
//echo $user1 -> addMrOrMrsTousername($user1);
//echo "<br>";
//$user2 = new Commentator();
//$user2 -> setUsername('Bob');
//$user2 -> setGender('male');
//echo $user1 -> addMrOrMrsTousername($user2);

