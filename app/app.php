<?php

class App 
{
	protected $controller="home";
	protected $methode="index";
	protected $params="index";
	public function __construct()
	{
		$url=$this->routeUrl();

		
		if (file_exists('controller/'.$url[0].'.php')) 
		{
			$this->controller=$url[0];
		unset($url[0]);
		}

		require_once'controller/'.$this->controller.'.php';
		$this->controller=new $this->controller;

		if (isset($url[1]))
		 {
			if (method_exists($this->controller, $url[1])) {
				$this->methode=$url[1];
				unset($url[1]);
			}
			else
			{
				echo "error";
			}
		}
		$this->params=$url ? array_values($url) : [];
//print_r($this->params);
call_user_func_array([$this->controller,$this->methode], $this->params);
	}


	public function routeUrl()
	{
		if (isset($_GET["url"])) 
		{
			return $ur=explode('/', filter_var(rtrim($_GET["url"],'/'),FILTER_SANITIZE_URL));
		}
	}
}

?>