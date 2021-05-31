<?php

namespace App\Http\Controllers;

use App\Bookings\TimeSlotGenerator;
use App\Models\Schedule;
use Carbon\CarbonInterval;
use function compact;

class BookingController extends Controller
{
    public function __invoke()
    {
        $schedule = Schedule::find(1);
        $slots = (new TimeSlotGenerator($schedule))->get();
        return view('bookings.create', compact('slots'));
    }
}
