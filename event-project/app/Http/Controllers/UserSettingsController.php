<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserSetting;

class UserSettingsController extends Controller
{
    public function updateSettings(Request $request)
    {
        $user = auth()->user();
        $User_id = $user->id;
        UserSetting::where('_id', $User_id)->update([
            'autoReservation' => $request->autoReservation,
            'autoApproval' => $request->autoApproval,
            'autoCreation' => $request->autoCreation,
        ]);
    }
}
