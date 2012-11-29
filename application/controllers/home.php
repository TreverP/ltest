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

	public function action_welcome($name, $place)
	{

		// This is displaying the data from the Controller
		// $place = ucfirst($place);
		// $name = ucfirst($name);
		// echo "Welcome to {$place}, {$name}!";


		// This is displaying the data from the View. This is better design
		$data = array(
					'name' => $name, 
					'place' => $place);

		return View::make('Welcome', $data);
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