<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RedirectController extends Controller
{
    //
    public function marugame(){
        return Redirect::route('ourCompany-smi', 301);
    }

    public function aboutUs(){
        return Redirect::route('aboutUs', 301);
    }

    public function news(){
        return Redirect::route('newsIndex', 301);
    }

    public function post($slug){
        return Redirect::route('newsIndex', 301);
    }
}