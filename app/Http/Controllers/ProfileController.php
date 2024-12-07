<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function showProfileForm()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'number' => 'required|string|max:20',
            'bio' => 'required|string|max:255',
            
        ]);

        Profile::create([
            'user_id' => Auth::id(),
            'address' => $validatedData['address'],
            'number' => $validatedData['number'],
            'bio' => $validatedData['bio'],
        ]);

        return redirect()->route('showDashboard');
    }
}
