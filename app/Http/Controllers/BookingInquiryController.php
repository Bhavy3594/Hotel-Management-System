<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookingInquiry;

class BookingInquiryController extends Controller
{
    public function store(Request $request)
    {
        // Sanitize incoming room/adult/children values (e.g., '4+' -> 4)
        $rooms = (int) filter_var($request->input('rooms', 1), FILTER_SANITIZE_NUMBER_INT);
        $adults = (int) filter_var($request->input('adults', 1), FILTER_SANITIZE_NUMBER_INT);
        $children = (int) filter_var($request->input('children', 0), FILTER_SANITIZE_NUMBER_INT);

        $request->merge([
            'rooms' => $rooms > 0 ? $rooms : 1,
            'adults' => $adults > 0 ? $adults : 1,
            'children' => $children >= 0 ? $children : 0,
        ]);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'arrival' => 'required|date',
            'departure' => 'required|date|after_or_equal:arrival',
            'rooms' => 'required|integer|min:1',
            'adults' => 'required|integer|min:1',
            'children' => 'required|integer|min:0',
        ]);

        BookingInquiry::create($validatedData);

        return redirect()->back()->with('booking_success', 'Thank you! Your room inquiry has been submitted. Our concierge team will confirm availability shortly.');
    }
}
