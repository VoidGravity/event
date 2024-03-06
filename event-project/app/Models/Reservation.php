<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Reservation extends Model
{
    use HasFactory;

    public function showSucess()
    {
        return view('front.sucess');
    }
    
}
