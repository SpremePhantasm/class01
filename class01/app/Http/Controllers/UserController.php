<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getAllUser() {
    	$user = new User;
    	$allUSer = $user->getAllUser();
    	dd($allUSer);
    }
}