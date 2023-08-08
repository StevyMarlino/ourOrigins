<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Events\ContactUsEvent;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('contact');
    }

    public function contact(ContactRequest $request)
    {
        event(new ContactUsEvent($request->all()));

        return redirect()->back()->with('message', 'Thank for Joining');
    }
}
