<?php

class Home_Controller extends Base_Controller {

	//RESTful Controllers Setup

	// public $restful = true;

	// public function get_index()
	// {
	// 	# code...
	// }

	// public function post_index()
	// {
	// 	# code...
	// }
	//End of RESTful Controller Setup

	public function action_index()
	{
		// return View::make('home.index');
		echo "This is my index page!";
	}

	public function action_welcome($name, $place)
	{
		$data = array(
			'name'  => $name,
			'place' => $place );

		//Creates and displays correct view
		return View::make('welcome', $data);
		// echo "Welcome to {$place}, {$name}!";
	}

	public function action_login()
	{

		echo "This is the login form";
	}

	public function action_logout()
	{
		echo "This is the logout action";
	}

}