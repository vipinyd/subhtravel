<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){

        return view('home.index');
    }


    public function aboutUs(){

        return view('home.about');
    }

    public function contactUs(){

        return view('home.contact');
    }


    public function TourDetailsCharDham(){
        return view('home.tour-details-chardham');
    }
    public function TourDetailsPrayagraj(){
        return view('home.tour-details-prayagraj');
    }
    public function TourDetailsVaranasi(){
        return view('home.tour-details-varanasi');
    }
    public function TourDetailsAyodhya(){
        return view('home.tour-details-ayodhya');
    }
}
