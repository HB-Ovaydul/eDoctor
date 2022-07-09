<?php

namespace App\Http\Controllers;

use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PatientProfileSettingsController extends Controller
{
        /**
    * Patient Profile Settings
    */
    public function PatientProfileSetting()
    {
      return view('frontend.patient.settings');
    }
  /**
  * Patient Change Password
  */
    public function PatientPasswordPage()
    {
      return view('frontend.patient.password');
    }
  /**
  * Patient Change Password
  */
    public function PatientPasswordChange(Request $request)
    {
        // Password Check
       if(!password_verify($request -> old_pass , Auth::guard('patient') -> user() -> password)){
            return back() -> with('danger', 'Old Password Not Match');
       }

       // Password Confirmation
       if( $request -> new_pass != $request -> password_confirmation ){
        return back() -> with('warning', 'Please Confirm Your Password');
       }

       // Update Password

      $pass_update = patient::findOrFail(Auth::guard('patient') -> user() -> id);

      $pass_update -> update([
          'password' => Hash::make($request -> new_pass)
      ]);

      return redirect() -> route('login.page') -> with('success', 'Password Changed!');

    }
}
