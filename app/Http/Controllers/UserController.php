<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;


class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
	public function showPasswordChangeForm()
    {
		return view("auth.passwords.change");
    }
	
	public function passwordChange(array $data)
    {
		$oldPass = Input::get('old_password');
		$newPass = Input::get('password');
		$confNewPass = Input::get('password_conf');
		
    }
}
