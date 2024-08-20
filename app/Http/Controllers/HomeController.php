<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // navigate to the home page and write the functionalities code here
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('home.about-us');
    }

    public function packages(){
        return view('home.packages');
    }

    public function people(){
        return view('home.people');
    }

    public function peopledetails(){
        return view('home.peopledetails');
    }

    public function business(){
        return view('home.business');
    }

    public function blog(){
        return view('home.blog');
    }

    public function blacklist(){
        return view('home.blacklist');
    }

    public function blacklistDetails(){
        return view('home.blacklistdetails');
    }


    public function contact(){
        return view('home.contact');
    }

    public function missing(){
        return view('home.missing');
    }

    public function wanted(){
        return view('home.wanted');
    }
    
    public function videos(){
        return view('home.videos');
    }


    public function videolist(){
        return view('home.video-list');
    }



    public function groups(){
        return view('home.groups');
    }


    public function businessdetails(){
        return view('home.business-details');
    }


    public function blacklistuser(){
        return view('home.blacklist-user');
    }


    public function wantedPersonDetails(){
        return view('home.wantedpersondetails');
    }

    

    public function missingPersonDetails(){
        return view('home.missingPersonDetails');
    }


    
    public function aboutfounder(){
        return view('home.aboutfounder');
    }

}
