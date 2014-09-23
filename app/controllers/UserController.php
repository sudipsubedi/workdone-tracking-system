<?php

	class UserController extends BaseController {

		public function login()	{
		//make the view
			//this is test
			return View::make('users.login');
			//return View::make('store/showstore');
		}

		public function validate() {
			
			// Fetch all request data.
			$data=Input::all();
			//var_dump($data);
			$username=Input::get('userid');
			$pass=Input::get('password');

			// Build the validation constraint set.
			$rules=array(
				'userid' => 'required',
				'password'=> 'required'
				);

			// Create a new validator instance.
			$validator=Validator::make($data, $rules);

			if($validator->fails()){
				return Redirect::to('login')->withErrors($validator);
			}
			return Redirect::route('auth')->withInput();
		}

		public function authen() {			
			$username=Input::old('userid');			
			$pas=Input::old('password');
			$cred=array('first_name' => $username, 'password' => $pas);
			//var_dump($cred);die;
			if(Auth::attempt($cred)){
				return Redirect::route('main');
			}	
			Session::flash('error', 'Please provide correct credentials!'); 		
			return Redirect::route('login');
		}

		public function show() {
			return View::make('store.showstore');
		}

		public function logout() {			
			  Auth::logout();
			  return Redirect::to('login');		
			 
		}


	}