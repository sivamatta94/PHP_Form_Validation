<?php
class User{
    public $username;
    protected $email;
    public $role="member";
    public function __construct($username,$email){
        $this->username=$username;
        $this->email=$email;
    }
    public function __destruct(){
        echo "the user $this->username is removed";
    }
    
    public function __clone(){
        $this->username = $this->username . ' (cloned)';
      }
    public function addFriend(){
        return "$this->email added a new friend";
    }
    //getter
public function Getemail(){
    return $this->email;
}
public function message(){
    return "$this->email sent a message";
}


    //setter
public function SetEmail($email){
    if(strpos($email,"@") > -1){
        $this->email = $email;
    }

}

}
class AdminUser extends User{
    public $level;
    public $role="admin";
    public function __construct($username,$email,$level){
        $this->level=$level;
        parent::__construct($username,$email);
    }
    public function message(){
        return "$this->email, an admin , sent a new message";
    }

}
$userone=new User("rupa","rupa@gmail.com");
$usertwo=new User("vinay","vinay@gmail.com");
$userthree=new AdminUser("mnr","mnr@gmail.com",5);

$userFour= clone $userone;
echo $userFour->username ."<br>";
//echo $userone->addFriend() . "<br>";

$userone->SetEmail("siva@gmail.com");





/*
print_r(get_class_vars("User")) . "<br>";
print_r(get_class_methods("User"));*/

?>