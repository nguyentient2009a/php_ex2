<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function signup(){
        return view('user.register');
    }

    public function processSignup(Request $request){
         $Fullname = $request->get('Fullname');
         $Email = $request->get('Email');
         $Phone = $request->get('Phone');
         $Address = $request->get('Address');
         $IdentityCard = $request->get('IdentityCard');
         return view('user.register-success')->with([
             'helloName'=> $Fullname,
             'email'=> $Email,
             'Phone'=> $Phone,
             'Address'=> $Address,
             'IdentityCard'=> $IdentityCard,
         ]);
    }
}
