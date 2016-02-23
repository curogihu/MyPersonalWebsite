<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DisplayController extends Controller
{
    public function displayTopPage()
    {
      return view('topPage');
    }

    public function displayPhpPage()
    {
      return view('phpPage');
    }

    public function displayScalaPage()
    {
      return view('phpPage');
    }

    public function displayEventPage()
    {
      return view('phpPage');
    }

    public function displaySchedulePage()
    {
      return view('phpPage');
    }

    public function displayJobPage($companyName){
      //echo $companyName;
      return view('jobPage')->with('companyName', $companyName);
    }
}