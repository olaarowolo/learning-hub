<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Booking;
use App\Mail\BookingNotification;

class BookNowController extends Controller
{
    public function showForm()
    {
        return view('book-now.form');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string|max:1000',
        ]);

        // Save booking to the database
        $booking = Booking::create($validated);

        // Send email notifications
        Mail::to($validated['email'])->send(new BookingNotification($booking, 'user'));
        Mail::to(config('mail.admin_address'))->send(new BookingNotification($booking, 'admin'));

        return redirect()->route('book-now.form')->with('success', 'Your booking has been submitted successfully.');
    }
}
