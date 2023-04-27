<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Investment;

class InvestmentController extends Controller
{
    public function update($id)
    {
        $Investment = Investment::find($id);
        $Investment->status = ! $Investment->status;
        $Investment->save();

        return redirect()->back()->banner('Investment has been updated');
    }
}
