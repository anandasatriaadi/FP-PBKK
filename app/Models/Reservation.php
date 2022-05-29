<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    
    protected $table = "reservations";

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function table(){
        return $this->belongsTo(Table::class);
    }
}
