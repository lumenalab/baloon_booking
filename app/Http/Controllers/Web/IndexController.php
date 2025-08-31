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

    public function faqs()
    {
        return view('web.faqs.faqs');
    }

    public function privacyPolicy()
    {
        return view('web.privacy-policy.privacy-policy');
    }

    public function termsAndConditions()
    {
        return view('web.terms-and-conditions.terms-and-conditions');
    }

}
