<?php



class User {

    public $userID;
    public $name;
    public $lastName;
    public $age;
    public $email;
    public $gender;

    public function __construct(int $userID, string $name, string $lastName, int $age, string $email, string $gender){

        $this->userID = $userID;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->email = $email;
        $this->gender = $gender;

    }


}


$user1 = new User(1, 'Andrea', "Iglio", 27, 'andrea.iglio@gmail.com', 'Male');



?>