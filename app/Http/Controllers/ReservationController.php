<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            "reservations" => $reservations
        ]);
    }

    // ======== Store the Reservation Request ========
    public function store(Request $request) {
        // ======== Create Reservation ========
        Reservation::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'status' => 1,
            'user_id' => Auth::user()->id,
            'table_id' => $request->table
        ]);

        // ======== Update table status to 1 (Reserved) ========
        Table::where('id', $request->table)->update(['status' => 0]);

        return redirect()->route("home");
    }

    // ======== Complete/Cancel Reservation ========
    public function completeReservation(Request $request) {
        Reservation::where('id', $request->id)->update(['status' => 0]);
        return redirect()->route("staffReservation")->with(["status" => "success", "msg" => "Reservation ".$request->id." completed."]);
    }
}
