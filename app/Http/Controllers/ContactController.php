<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Http;

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
    public function subscribe(Request $request)
    {
        
        $request->validate([
            'phone_number' => 'required|max:22',           
        ]);
        
        Http::withHeaders([
            'Service' => config('app.sms_tokens')
        ])->post(
            config('app.sms_url'),
            [
                'number' => intval(str_replace(['+', ' ', '(', ')', '-'], '', $request['phone_number'])),
                'status' => 3
            ]
        );

        return redirect()->back();
    }
}
