<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blok1;
use App\blok2;
use App\Http\Controllers\Controller;
use Session;

class pagesController extends Controller
{
        public function home()
        {
                return view('home');
        }

        public function skills()
        {
                return view('skills');
        }

        public function interests()
        {
                return view('interests');
        }
}
