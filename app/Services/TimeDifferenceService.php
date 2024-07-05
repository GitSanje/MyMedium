<?php

namespace App\Services;

use Carbon\Carbon;

class TimeDifferenceService 
{
    public function getDifference(Carbon $date)
    {
        $now = Carbon::now();

        // Calculate differences
        $diffInMinutes =  (int)abs($now->diffInMinutes($date));
        $diffInHours =  (int)abs($now->diffInHours($date));
        $diffInDays =  (int)abs($now->diffInDays($date));
        $diffInMonths = (int) abs($now->diffInMonths($date));
        $diffInYears =  (int)abs($now->diffInYears($date));

        $year = $date->year;         
        // $monthname= Carbon::create()->month($date->month)->format('F');   
        $monthname = $date->format('F');    
        $day = $date->day;  


        // Determine appropriate time unit based on the difference
        if ($diffInMinutes < 60) {
            return $diffInMinutes . ' min ago';
        } elseif ($diffInHours < 24) {
            return $diffInHours . ' hr ago';
        } elseif ($diffInDays < 10) {
            return $diffInDays . ' d ago';
        } elseif ($diffInMonths < 6) {
            return $day . ' '. $monthname;
        } else {
            return $monthname .' '. $year;
        }
    }
}
