<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function showForm()
    {
        return view('contact');
    }

    public function submitForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // You can send the email or save the data to the database here

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
