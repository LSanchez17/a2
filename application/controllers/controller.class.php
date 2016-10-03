<?php
class Controller
{
    public $load;
    public $model;
    public $user;
	
    function __construct()
    {
        $this->load = new Load();
	//$this->model = new Model();
        $this->user = new User();
	$this->home();
    }
    //need all magic methods
	
    function home()
    {
        $this->userID = 'LS_TEST';    
        $this->firstname = 'Luis';
        $this->lastname = 'Sanchez';
        $this->email = 'LS@TEST.NET';
        $this->role = 'ADMIN';
      
        //Since the model is now abstract, it can't be instantiated
        //so we simply create a user model derivation that functions like it, 
        //This allows us to derive the original model for many other uses

        $data = $this->user->getName();//talks to model
		
	$this->load->view('view.php',$data);//talks to view		
    }
	
	
	
}
















?>