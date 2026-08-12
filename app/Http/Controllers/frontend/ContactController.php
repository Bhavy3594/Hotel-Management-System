<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Contact page view
    public function index()
    {
        return view('frontend.contact');
    }

    // Contact form submit → save into database
    public function store(Request $request)
    {
        // ✅ Validation
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        $validatedData['subject'] = $validatedData['subject'] ?? 'General Reservation Inquiry';

        // ✅ Save data using mass assignment
        Contact::create($validatedData);

        // ✅ Redirect back with success message
        return redirect()->back()->with(
            'success',
            'Your message has been sent successfully!'
        );
    }
}
