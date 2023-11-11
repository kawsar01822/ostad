<?php

// task 1:
Route::get('/about',[AboutController:class,'index']);


// task 2:


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        if($this->authenticateUser($email, $password))
        {
            return "Login successful";
        }
        else
        {
            return "'Invalid credentials";
        }
    }

    private function authenticateUser($email, $password)
    {
        $userEmail = "user@email.com";
        $userPass = "userPassword";

        if ($email == $userEmail && $password == $userPass) {
            return true;
        }

        return false;
    }
}


?>