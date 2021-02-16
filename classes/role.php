<?php

include_once __DIR__ . '/user.php';


class Role extends User {


    public $role;

    public function __construct(string $name, string $lastName, int $age, string $email, string $gender,string $role)
    {
        parent::__construct($name, $lastName, $age, $email, $gender);
        $this->role = $role;
    }



}


$admin = new Role("Marco", "Pallino", 99, 'marco.pallino@gmail.com', 'Male', 'admin');
var_dump($admin);



?>