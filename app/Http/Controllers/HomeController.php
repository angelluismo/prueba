<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
 
    /**
     * @return View
     */
    public function index()
    {
        return view('welcome');
    }   
    /**
     * @return View
     */
    public function contact()
    {
        return view('contact');
    }
     /**
     * @return View
     */
    public function abaut()
    {
        return view('abaut');
    }
     /**
     * @return View
     */
    public function admin()
    {
        return view('admin');
    }
}
