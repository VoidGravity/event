<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\UserSetting;

class UserSettingSeeder extends Seeder
{
    public function run()
    {
        // Assuming you have a user to attach the settings to.
        // You can use User::first() or User::find(1) if you know the user's ID.
        $user = User::first(); 

        if ($user) {
            UserSetting::create([
                '_id' => 3,
                'autoReservation' => false,
                'autoApproval' => false,
                'autoCreation' => false,
            ]);
        }
    }
}
