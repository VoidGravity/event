<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class UserSetting extends Model
{
    // Set the connection name for the model
    protected $connection = 'mongodb';

    // Define the MongoDB collection for this model
    protected $collection = 'user_settings';

    // Define the fillable attributes
    protected $fillable = [
        'autoReservation',
        'autoApproval',
        'autoCreation',
        'user_id',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
