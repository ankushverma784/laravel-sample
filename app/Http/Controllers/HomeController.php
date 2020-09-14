<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('home.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboutUs()
    {
        return view ('home.about_us');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contactUs()
    {
        return view ('home.contactus');
    }

    
    public function destination()
    {
        return view ('home.destination');
    }
    public function newslisting()
    {
        return view ('home.newslisting');
    }
    public function newslistingdetails()
    {
        return view ('home.newslistingdetails');
    }
    public function standardtours()
    {
        return view ('home.standardtours');
    }
    public function tour()
    {
        return view ('home.tour');
    }
    public function tourdetails()
    {
        return view ('home.tourdetails');
    }


    // public function ()
    // {
    //     return view ('home.404');
    // }
    
 
}
