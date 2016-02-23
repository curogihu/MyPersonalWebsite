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
      return view('scalaPage');
    }

    public function displayEventPartcipationPage()
    {
      return view('eventParticipationPage');
    }

    public function displaySchedulePage()
    {
      return view('schedulePage');
    }

    public function displayJobPage($companyName)
    {
      //echo $companyName;
      return view('jobPage')->with('companyName', $companyName);
    }
}