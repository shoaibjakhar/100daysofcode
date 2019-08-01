<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\posts;

//This is test class, used to test functions/scripts
class TestScripts extends Controller {
    
    public function test_posts(){

    	$posts = posts::all();
    	
    	return view('testScripts', ['posts' => $posts]);

    }

}
