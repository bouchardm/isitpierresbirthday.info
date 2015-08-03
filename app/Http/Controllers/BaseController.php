<?php

namespace pierresbirthday\Http\Controllers;

use Illuminate\Http\Request;

use pierresbirthday\Http\Requests;
use pierresbirthday\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
