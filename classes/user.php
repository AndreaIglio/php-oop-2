<?php



class User {

    public $name;
    public $lastName;
    public $age;
    public $email;
    public $gender;

    public function __construct(string $name, string $lastName, int $age, string $email, string $gender){

        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
        $this->gender = $gender;

    }


}


$user1 = new User('Andrea', "Iglio", 27, 'andrea.iglio@gmail.com', 'Male');
var_dump($user1);
var_dump($user1->name);
$user1->name = 'Gino';
var_dump($user1);


?>