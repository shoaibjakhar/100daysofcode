<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    

    public function index() {

    	return view('index');

    }

        public function author() {

    	return view('author');

    }

        public function blank() {

    	return view('blank');

    }

        public function blog_post() {

    	return view('blog_post');

    }

        public function category() {

    	return view('category');

    }

        public function contact() {

    	return view('contact');

    }


    
}
