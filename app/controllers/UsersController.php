<?php
	class UsersController extends BaseController
	{
		public function postLogin()
		{	
			Auth::attempt(array(
				'email'    => Input::get('email'), 
				'password' => Input::get('password')
			));

			if (Auth::check())
				echo '<br>logado';
			else
				echo '<br>nao logado';


			return Redirect::route('admin');
		}
	
	
		public function getLogout()
		{
			Auth::logout();

			if (Auth::check())
				echo '<br>logado';
			else
				echo '<br>nao logado';
			
			return Redirect::route('index');
		}
	}
