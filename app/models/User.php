<?php

class User extends Eloquent {

	protected $table = 'users';


	public static function isLogged()
	{
		if(Session::has('id'))
			return true;
		else
			return false;
	}

	public static function isAdmin()
	{
		if(Session::get('user_Type') > 1)
			return true;
		else
			return false;
	}



}

?>
