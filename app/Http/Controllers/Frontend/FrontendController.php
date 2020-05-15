<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;

class FrontendController extends Controller
{
    public function index(){
    	$data['logo'] = Logo::first();
    	$data['sliders'] = Slider::all();
        return view('frontend.layouts.home',$data);
    } 
    public function aboutUs(){
    
        return view('frontend.single_pages.about-us');
    }
    public function contactUs(){
    
        return view('frontend.single_pages.contact-us');
    }
}
