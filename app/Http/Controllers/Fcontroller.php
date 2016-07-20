<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Socialize;

use App\Http\Requests;

class Fcontroller extends Controller
{
    //

    public function show(){

    	return view("great_going");


    }


    public function redirectToProvider()
{
    return Socialize::with('facebook')->redirect();
}

public function handleProviderCallback()
{
    $user = Socialize::with('facebook')->user();

    // $user->token;
}

public function redirectToProviderG()
{
    return Socialize::with('google')->redirect();
}


}
