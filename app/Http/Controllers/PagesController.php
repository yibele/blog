<?php

namespace App\Http\Controllers;

/**
* 
*/
class PagesController extends Controller
{
	public function getIndex() {
		
		#process variable data or params
		#talk ot the model
		#recieve from the model
		#compile or process data from the model if needed
		#pass that data to the correct view
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = 'yibu';
		$last = 'gele';
		$fullname = $first . " " . $last;
		
		return view('pages.about',compact('fullname'));
	}

	public function getContact() {
		return view('pages.contact');	
	}

}
