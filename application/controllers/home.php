<?php

class Home_Controller extends Base_Controller {


	public function action_index()
	{
		// return View::make('home.index');
		echo "This is my index page!";
	}

	public function action_login()
	{

		echo "This is the login form";
	}

	public function action_logout()
	{
		echo "This is the logout action";
	}

	// public function action_welcome($name, $place)
	// {
	// 	$data = array(
	// 		'name'  => $name,
	// 		'place' => $place );

	// 	//Creates and displays correct view
	// 	return View::make('welcome', $data);
	// 	// echo "Welcome to {$place}, {$name}!";
	// }

}