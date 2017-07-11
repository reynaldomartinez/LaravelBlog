<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex(){
        #process variable data or parameters
        #talk to the model
        #recieve from model
        #compile or process data from the model if needed
        #pass that data to the correct view
        return view('pages.welcome');
    }

    public function getAbout(){
        $firstName = 'Reynaldo';
        $lastName = 'Martinez';
        $fullName = $firstName . " " . $lastName;
        $email = "rambo911@gmail.com";

        $data = [];
        $data['fullname'] = $fullName;
        $data['email'] = $email;
        return view('pages.about')->with('data1', $data);
    }

    public function getContact(){
        return view('pages.contact');
    }
}
