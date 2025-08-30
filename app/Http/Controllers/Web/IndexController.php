<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    public function packages()
    {
        return view('web.packages.index');
    }

    public function contact()
    {
        return view('web.contact.contact');
    }

    public function about()
    {
        return view('web.about.about');
    }
}
