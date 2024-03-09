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
    public function delateUser($id)
    {
        $user = User::findOrFail($id);
        
        // Delete related records in the events table
        // You might need to do similar operations for other related models
        $user->events()->delete(); // Only if it's safe to delete these records
    
        // After all related records are deleted, delete the user
        $user->delete();
    
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
    public function updateUserRole(Request $request){
        // dd($request->all());
        $user = User::findOrFail($request->user);
        $user->role_id = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'User role updated successfully.');
    }
    
}
