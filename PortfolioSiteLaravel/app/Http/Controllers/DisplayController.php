<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DisplayController extends Controller
{
    public function displayDeveloperPage()
    {
      return view('developerPage');
    }

    public function displayPhpPage()
    {
      return view('phpPage');
    }

    public function displayScalaPage()
    {
      return view('scalaPage');
    }

    public function displayHobbyPage()
    {
      return view('hobbyPage');
    }

    public function displayOtherPage()
    {
      return view('otherPage');
    }

    public function displayJobPage($companyName)
    {
      //echo $companyName;
      return view('jobPage')->with('companyName', $companyName);
    }
}