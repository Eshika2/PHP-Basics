<?php 
    /* --- Object Oriented Programming -- */

    /*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
    */

    class User {
        // Properties are just variables that belong to a class.
        // Access Modifiers: public, private, protected
        // public - can be accessed from anywhere
        // private - can only be accessed from inside the class
        // protected - can only be accessed from inside the class and by inheriting classes
        private $name;
        public $email;
        private $password;

        // The constructor is called whenever an object is created from the class.
        // We pass in properties to the constructor from the outside.
        public function __construct($name, $email, $password) {
            $this->name = $name;
            $this->email = $email;
            $this->password = $password;
        }
        // Methods are functions that belong to a class.
        function getName() {
            return $this-> name;
        }
        function getPassword() {
            return $this-> password;
        }
        // function setName($name) {
        //   $this->name = $name;
        // }

        function displayData() {
            echo "<hr>";
            echo "The Username is {$this->name}.<br>";
            echo "The Email is {$this->email}.<br>";
            echo "The Password is {$this->password}.<br>";
        }

        function login() {
            return "User $this->name is logged in.";
        }

        // Destructor is called when an object is destroyed or the end of the script.
        function __destruct() {
            // echo "The Username is {$this->name}.<br>";
            // echo "The Email is {$this->email}.<br>";
            // echo "The Password is {$this->password}.<br>";
        }

    }
    // Instantiate a new user
    $user1 = new User('Eshika', 'eshika@gmail.com', '1234');
    $user2 = new User('Uvinda', 'uvinda@gmail.com', '2003');

    // echo $user1->name;

    // var_dump($user1);
    $user1->displayData();
    $user2->displayData();

    /* ----------- Inheritence ---------- */

    /*
    Inheritence is the ability to create a new class from an existing class.
    It is achieved by creating a new class that extends an existing class.
    */

    class employee extends User {
        private $title;
        public function __construct($name, $email, $password, $title) {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }
        function getTitle() {
            return $this->title;
        }
    }

    $employee1 = new employee('EUD', 'eud@gmail.com', '12345', 'Intern');
    $employee1->displayData();
    echo "The Title is {$employee1->getTitle()}";
?>

<!-- 
The Username is Eshika.
The Email is eshika@gmail.com.
The Password is 1234.
The Username is Uvinda.
The Email is uvinda@gmail.com.
The Password is 2003.
The Username is EUD.
The Email is eud@gmail.com.
The Password is 12345.
The Title is Intern 
-->