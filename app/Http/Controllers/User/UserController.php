<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function index(){
        return view('user.index');
    }
    public function reset(){
        return view('user.password');
    }
    public function create(){
        return view('user.create');
    }
}
