<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Contracts\View\View;

//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{

    public function userHome()
    {
        $coupon = request()->query('coupon');
        $email = false;
        return view('home', compact(
            'coupon',
            'email'
        ));
    }

    public function userRegister()
    {
        $email = request()->get('email');
        return view('home', compact(
            'email'
        ));
    }

    public function single(string $post_id, string $test = null): View
    {
        $post = Posts::find($post_id);
        return view('single', compact('post', 'test'));
    }

}
