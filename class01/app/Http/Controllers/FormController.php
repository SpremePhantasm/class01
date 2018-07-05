<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
 public function postform (Request $request) {
 	  $validatedData = $request->validate([
        'Email' => 'required|email|',
        'Password' => 'required',
         ]);
 	$data = $request->all();
 	dd($data);
 	 }
    //
}

