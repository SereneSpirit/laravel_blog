<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
 
  public function product(){
    return view('products');
  }
  public function shopping(){
    return view('shoppingcart');
  }
  public function index()
  {
    return view('home');
  }
  
  }

