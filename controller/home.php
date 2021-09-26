<?php

class Home extends Controller
{
	
	public function __construct()
	{
		// parent::__construct();
		$model=$this->loadModel("homeModel");

	}

	public function index()
	{
		//$data=UserService::all();
		// $_SESSION['data']=$data;
		// compact("data");
	echo "hello";
		//$this->ViewBlade("home/index",$data);
	}
}

?>