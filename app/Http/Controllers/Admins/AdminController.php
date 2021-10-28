<?php

namespace App\Http\Controllers\Admins;

use App\Models\User;
use App\Models\TumsaBursary;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Rules\CheckSamePassword;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    public function index()
    {
        
        return view('admin.admin.dashboard',[
            'users' => User::orderByDesc('id')->get(),
            'tumsa_bursary' => TumsaBursary::orderByDesc('id')->get()
        ]);
    }

    public function settingsView()
    {   
        return view('admin.admin.settings');
    }

    public function updatePassword(Request $request)
    {
        
        //current password
        //new password
        //password confirmation
        
        $this->validate($request,[
            'current_password' => ['required',new MatchOldPassword],
            'password' => [
                'required', 
                'confirmed',
                Password::min(8)
                ->mixedCase()
                ->letters()
                ->numbers()
                ->symbols()
                ->uncompromised(),
                 new CheckSamePassword
                 ]
            ]);

            auth()->user('admin')->update([
                "password" => bcrypt($request->password) 
            ]);

            return redirect()->route('admin.settings')->with('success','Password changed successfully');

    }

    public function studentsView()
    {   
        return view('admin.admin.students',[
            'users' => User::orderByDesc('id')->get(),
            'tumsa_bursary' => TumsaBursary::orderByDesc('id')->get()
        ]);
    }

    public function studentView($id)
    {   
        return view('admin.admin.student',[
            'user' => User::findOrFail($id),
        ]);
    }

    public function applicantsView()
    {   
        return view('admin.admin.applicants',[
            'users' => User::orderByDesc('id')->get(),
            'tumsa_bursary' => TumsaBursary::orderByDesc('ammount_requested')->get()
        ]);
    }



}
