<?php

namespace App\Models;

use App\Events\ReservationCreate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    protected $table = "reservations";

    protected $guarded = ['id'];

    protected $dispatchesEvents = [
        'created' => ReservationCreate::class
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function table(){
        return $this->belongsTo(Table::class);
    }
}
