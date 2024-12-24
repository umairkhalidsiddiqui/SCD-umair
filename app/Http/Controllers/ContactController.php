<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage; 

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Store the data in the database
        ContactMessage::create($validatedData);

        // Return a response (e.g., redirect or success message)
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
