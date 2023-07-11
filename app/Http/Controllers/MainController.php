<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class MainController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    protected $redirectTo = '/create';

}
