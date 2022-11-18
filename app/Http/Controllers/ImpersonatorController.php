<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImpersonatorController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => ['required', 'exists:users,id']
        ]);
        $request->session()->put('impersonate', $request->user_id);
        $request->session()->put('impersonator_id', auth()->id());

        auth('web')->loginUsingId($request->user_id);
        return redirect()->route('dashboard');
    }

    public function destroy(Request $request)
    {
        $user_id = session('impersonator_id');
        auth('web')->loginUsingId($user_id);
        session()->forget(['impersonate', 'impersonator_id']);
        session()->regenerate();
        return redirect()->route('dashboard');
    }
}
