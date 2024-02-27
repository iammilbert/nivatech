<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    /**
     * AuthController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:sanctum')->except(['index', 'signup_page', 'contact_us']);

    }


    public function index()
    {
        return view('auth/signin');
    }

    public function signup_page()
    {
        return view('auth/register');
    }
}