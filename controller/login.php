<?php

class Login extends Controller
{
	
	function __construct()
	{
	parent::__construct();
	}

	public function check()
	{

	 $_SESSION['email']="roky";


    header("Location:".URL."home/index");
	}
}

?>