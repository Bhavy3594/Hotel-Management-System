<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|max:255|unique:newsletters,email',
        ]);

        Newsletter::create($validatedData);

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}
