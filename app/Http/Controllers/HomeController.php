<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    function userWelcome() {
        $coupon = request()->query('coupon');
        $email = false;
        return view('home', compact(
            'coupon',
            'email'
        ));
    }

    function userRegister() {
        $email = request()->get('email');
        return view('home', compact(
            'email'
        ));
    }

}
