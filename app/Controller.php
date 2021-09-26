<?php
/**
* 
*/
class Controller 
{
	
	public function loadModel($model)
	{
		require_once'models/'.$model.'.php';
			return new $model();
	}
	
	public function ViewBlade($view,$data=[])
	{
		if (file_exists('view/'.$view.'.blade.php'))
		 {
			require_once'view/'.$view.'.blade.php';
		}
		else
		{
			require_once'view/error/error.blade.php';

		}
	}
	
}
?>