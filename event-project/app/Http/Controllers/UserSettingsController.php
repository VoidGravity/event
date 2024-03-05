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
        if ($request->autoApprouval == NULL) {
            $autoApproval = "off";
        } else {
            $autoApproval = "on";
        }
        if ($request->autoCreation == NULL) {
            $autoCreation = "off";
        } else {
            $autoCreation = "on";
        }
        UserSetting::where('_id', $User_id)->update([
            'autoReservation' => $request->autoReservation,
            'autoApproval' => $autoApproval,
            'autoCreation' => $autoCreation,
        ]);
        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
