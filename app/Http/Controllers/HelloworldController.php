<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;

class HelloworldController extends Controller
{
    public function inbex()
    {
        return "Saya sedang belajar framwork laravel 11";
    }
    public function ambilfile()
    {
        return view('ambilfile');
    }


    public function getlorem()
    {
        return view('v_html.getlorem');
    }
}
