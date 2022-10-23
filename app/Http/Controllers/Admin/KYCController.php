<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kyc;
use Illuminate\Http\Request;

class KYCController extends Controller
{
    public function edit($id)
    {
        $kyc = Kyc::findOrFail($id);
        return view('kyc.edit', compact('kyc'));
    }

    public function update($id)
    {
        $kyc = Kyc::findOrFail($id);
        $kyc->status = !$kyc->status;
        $kyc->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $kyc = Kyc::findOrFail($id);
        $kyc->delete();
        return redirect()->route('admin.dashboard');
    }
}
