<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function getContactPage()
    {
        return view('contact.index');
    }

    public function getFaqPage()
    {
        return view('faq.index');
    }

    public function getLegalPage()
    {
        return view('legal.index');
    }

    public function getTacPage()
    {
        return view('terms.index');
    }

}
