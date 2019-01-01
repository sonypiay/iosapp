<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BarangController extends Controller
{
  public function index( Request $request )
  {
    return response()->view('index');
  }
}
