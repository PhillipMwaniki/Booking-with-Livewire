<?php

namespace App\Bookings;

use App\Models\Schedule;
use Carbon\CarbonInterval;
use Carbon\CarbonPeriod;

class TimeSlotGenerator
{
    public const INCREMENT = 15;

    protected $interval;

    public function __construct(Schedule $schedule)
    {
        $this->interval = CarbonInterval::minutes(self::INCREMENT)
                                        ->toPeriod(
                                            $schedule->date->setFromTime($schedule->start_time),
                                            $schedule->date->setFromTime($schedule->end_time)
                                        );
    }

    public function get(): CarbonPeriod
    {
        return $this->interval;
    }
}
