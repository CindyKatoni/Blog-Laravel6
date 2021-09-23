<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;
// use Illuminate\Http\Request;

class PagesController extends Controller
{
    //ddd(resolve('App\Example'), resolve('App\Example'));
    public function home()
    {
        return File::get(public_path('index.php'));
    }

}
