<?php

include_once __DIR__ . '/user.php';


class Role extends User {


    public $role;

    public function __construct(int $userID, string $name, string $lastName, int $age, string $email, string $gender,string $role)
    {
        parent::__construct($userID, $name, $lastName, $age, $email, $gender);
        $this->role = $role;
    }


    public function cambiaSito($role){
        if($role == 'admin'){

        }

    }


}


$user1->role = 'admin';




?>