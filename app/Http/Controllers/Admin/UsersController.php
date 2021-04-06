<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UsersController extends Controller
{
    public function __construct(){

        $this->middleware('auth')->except('showUsersNames2');

    }

    public function showUsersNames1 (){
        return "Ali";
    }

    public function showUsersNames2 (){
        return "Amr";
    }

    public function showUsersNames3 (){
        return "Omar";
    }
}

