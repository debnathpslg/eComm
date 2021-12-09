<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    //

    function index()
    {
        // if (Session::has('user')) {
        //     Session::forget('user');
        //     return "Welcome to Product Dashboard, your sessions exists.";
        // } else {
        //     return "Welcome to Product Dashboard, but no sessions exists.";
        // }
        return "Welcome to Product Dashboard";
    }
}
