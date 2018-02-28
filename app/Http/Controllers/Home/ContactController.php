<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('home.contact.index');
    }

    public function store(ContactRequest $request)
    {
        dd($request->input());
    }
}
