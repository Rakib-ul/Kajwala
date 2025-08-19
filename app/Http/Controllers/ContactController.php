<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'phone' => 'nullable|string|max:20',
            'subject' => 'nullable|string|max:200',
            'message' => 'required|string',
        ]);

        Contact::create($validated);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.contacts.index', compact('messages'));
    }
}