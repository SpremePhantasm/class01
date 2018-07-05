<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	public function getIndex() {
		#process variable data or params
		# talk to the model
		# receive from the model
		# compile or process data from the model
		# pass that data to the correct view
		return view("welcome");
	}
	public function getAbout() {
		$first = 'Duy';
		$last = 'Ta';

		$fullname = $first.' '.$last;
		$email = "duyta@gmail.com";
		$data = [];
		$data["email"] = $email;
		$data["fullname"] = $fullname;
		return view("about")->withData($data);
	}
	public function getContact () {
		return view("contact");
	}
	public function postContact () {

	}
}