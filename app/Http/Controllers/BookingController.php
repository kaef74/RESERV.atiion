<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;


class BookingController extends Controller
{
    public function index(Request $request)
    {
        $bookings = Booking::orderBy('user_id')->where('user_id', '=', $request->user()->id )->get();

        return view('dashboard', compact([
            'bookings'
        ]));
    }
}
