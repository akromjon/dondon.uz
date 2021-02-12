<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.contact', ['title' => trans('title')]);
    }
    public function store(ContactRequest $request)
    {
        Contact::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'message'   => $request->message
        ]);

        return view('contact.contact')->withSuccess(__('lang.done_successfully'));
    }
}
