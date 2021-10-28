<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TumsaBursaryController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();
        $this->validate($request,[
            'ammount_requested' => 'required|numeric',
            'fee_balance' => 'required|numeric',
            'fee_statement' => 'nullable|mimes:jpeg,gif,bmp,png,pdf|max:2048',
        ]);
        
 

        $fee_statement = $request->file('fee_statement');
        $fee_statement_name = time()."_".  preg_replace('/\s+/', '_', strtolower($fee_statement->getClientOriginalName()));
        $fee_statement->move(public_path('portal/images/bursary/satements'), $fee_statement_name);
        

        $user->tumsa_bursary()->create([
            "ammount_requested" => $request->ammount_requested,
            "fee_balance" => $request->fee_balance,
            'fee_statement' => $fee_statement_name

        ]);


        return redirect()->route('student.bursary')->with('success','Succesfully applied for the TUMSA Bursary, Keep checking the portal to see if you have been awarded the bursary');
    }
}
