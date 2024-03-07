<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Reservation extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['event_id', 'user_id', 'stripe_payment_intent_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
