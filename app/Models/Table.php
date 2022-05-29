<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    
    protected $table = "tables";

    protected $guarded = ['id'];

    public function reservation(){
        return $this->hasMany(Reservation::class);
    }
}
