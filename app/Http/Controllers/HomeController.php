<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth');
   }
   public function index()
   {
        return view('Dashboard.home');
   }

   public function create()
   {
       return view('Dashboard.page.create');
   }

   public function store(Request $request)
   {
       
       return view('Dashboard.page.store');

   }

}
