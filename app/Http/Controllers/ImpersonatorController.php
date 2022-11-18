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
        auth('web')->loginUsingId(session('impersonator_id'));
        session()->forget('impersonate');
        session()->forget('impersonator_id');
        return redirect()->route('dashboard');
    }
}
