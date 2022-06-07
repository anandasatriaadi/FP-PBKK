<?php

namespace App\Http\Controllers;

use App\Events\Reservation as EventsReservation;
use App\Events\ReservationCreate;
use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

class ReservationController extends Controller
{
    public function create() {
        $tables = Table::where('status', 1)->get();

        return view("user-reservation", [
            "tables" => $tables
        ]);
    }

    public function staffIndex() {
        $reservations = Reservation::get();

        return view("staff-reservation", [
            "reservations" => $reservations->reverse()
        ]);
    }

    // ======== Store the Reservation Request ========
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'table' => 'required'
        ]);

        // ======== Create Reservation ========
        $reservation = Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'status' => 1,
            'user_id' => Auth::user()->id,
            'table_id' => $request->table
        ]);

        event(new EventsReservation(Auth::user(), $reservation));

        // ======== Caching submit reservation ========
        Event::dispatch(new ReservationCreate());
        // $reservationCache = Cache('reservation', function(){
        //     return Reservation::get();
        // });

        // ======== Update table status to 1 (Reserved) ========
        Table::where('id', $request->table)->update(['status' => 0]);

        return redirect()->route("home");
    }

    // ======== Complete/Cancel Reservation ========
    public function completeReservation(Request $request) {
        Reservation::where('id', $request->id)->update(['status' => 0]);
        Reservation::where('id', $request->id)->first()->table->update(['status' => 1]);
        return redirect()->route("staffReservation")->with(["status" => "success", "msg" => "Reservation ".$request->id." completed."]);
    }
}
