<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Contracts\View\View;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    function userWelcome()
    {
        $coupon = request()->query('coupon');
        $email = false;
        return view('home', compact(
            'coupon',
            'email'
        ));
    }

    function userRegister()
    {
        $email = request()->get('email');
        return view('home', compact(
            'email'
        ));
    }

    function single(string $post_id): View
    {
        $post = Posts::find($post_id);
        return view('single', compact('post'));
    }

}
