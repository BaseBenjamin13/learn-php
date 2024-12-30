<?php

class User {
    public $name;
    public $email;
    public $password;

    // A constructor is a methid that runs when an object is created
    public function __construct($name, $email, $password) {
        echo '<br>';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        echo $this->name . ' ' . $this->email . ' ' . $this->password;
    }

    function set_name($name) {
        $this->name = $name;
    }
    function get_name() { return $this->name; }
}

$user1 = new User('ben', 'benmorgiewicz@gmail.com', 'password');
$user2 = new User('billy', 'billymorgez@gmail.com', 'password');


// $user1->name = 'Ben';
// $user1->set_name('Ben');
// $user2->set_name('Billy');

// var_dump($user1);
// echo "<br>";
// var_dump($user2);

// echo "<br>";
// echo $user1->get_name();

// Inheritence

class Employee extends User {
    public function __construct($name, $email, $password, $title) {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '234234', 'manager');

echo '<br>';
echo $employee1->get_title();