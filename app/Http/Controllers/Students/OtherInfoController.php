<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherInfoController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user();
        $this->validate($request,[
            'helb' => 'required|numeric',
            "cdf" => 'required|numeric',
            'other_sponsors' => 'required|numeric',
            'school_program' => 'required|boolean',
            'differment' => 'required|boolean',
            'sponsored_before' => 'required|boolean',
        ]);
        
      
        

        $user->bursary()->create([
            "helb" => $request->helb,
            "cdf" => $request->cdf,
            'other_sponsors' => $request->other_sponsors

        ]);

        $user->other_info()->create([
            "school_program" => $request->school_program,
            "differment" => $request->differment,
            'sponsored_before' => $request->sponsored_before

        ]);

        return redirect()->route('student.bursary')->with('success','Succesfully uploaded your information, Proceed to apply for TUMSA Bursrary');
    }
}
