<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'price',
        'payment_methode',
        'description',
        'start_date',
        'location',
        'capacity',
        'user_id',
        'category_id',
        'deleted_at',
        'image'
    ];


}
