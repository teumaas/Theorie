<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;
use Validator;
use Illuminate\Support\Facades\DB;
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
		
	public function passwordChange(Requests\PasswordChangeRequest $request)
    {
		
		
    }
}
