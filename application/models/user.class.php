<?php
class User extends Model
{
    public function __construct() 
    {
        parent::__construct();
    }

    public function __set($name,$value) 
    {
 		
    }
 	
    public function __get($name) 
    {
 		
    }
 	
    public function __destruct() 
    {
 		
    }

    public function getName()
    {
        return array
        (
        'userId' => $this->userID,
        'firstname' => $this->firstname,
        'lastname' => $this->lastname,
        'email' => $this->email,
        'role' => $this->role
        );
    }


}

?>