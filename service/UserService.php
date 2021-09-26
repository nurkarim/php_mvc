<?php
use Illuminate\Database\Eloquent\Model as Eloquent;

class UserService extends Eloquent
{
	
	public $name;

	protected $fillable=['name_user','email','password'];
}

?>