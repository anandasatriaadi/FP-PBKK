<?php

namespace App\Console\Commands;

use App\Mail\ReservationReminder;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class ReservationReminderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reservation:remind';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends email to reserved tables on the current date.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // echo date('Y-m-d H:i:s', strtotime('+7 hours')).' 00:00:00';
        $results = Reservation::whereDay('date', '=', date('d', strtotime('+7 hours')))->get();

        foreach ($results as $result) {
            $date = date('d/m/Y', strtotime('+7 hours'));
            Mail::to($result->email)->send(new ReservationReminder($date));
            // echo $result->email." -> ".date('d/m/Y', strtotime('+7 hours'))."\n";
        }
        // echo Reservation::where('date', '=', date('Y-m-d', strtotime('+7 hours')).' 00:00:00')->get();
        return 0;
    }
}
