<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;

class PatientAuthController extends Controller
{
    // Patient Register
  public function Register(Request $request)
  {
    // Data Validation 
    $this-> validate($request,[
      'name'        => 'required',
      'email'        => 'required|email|unique:patients',
      'mobile'        => 'required|unique:patients',
    ]);
      // Data Create

     $patient = patient::create([
        'name'          => $request -> name,
        'email'         => $request -> email,
        'mobile'        => $request -> mobile,
        'password'      => password_hash($request -> password , PASSWORD_DEFAULT),
      ]);

      return redirect() -> route('patient.reg.page') -> with('success','Assalamuaikum' .' '. $patient -> name .'Your Account Created Successful! Please Now login.' );
  }
    // Patient Login
  public function Login(Request $request)
  {
    // Data Validation 
    $this-> validate($request,[
      'email'        => 'required',
    ]);

    if(Auth::guard('patient') -> attempt([ 'email' => $request -> email, 'password' => $request -> password]) || Auth::guard('patient') -> attempt([ 'mobile' => $request -> email, 'password' => $request -> password]) ){
        return redirect() -> route('patient.desh.page');
    }else{
      return redirect() -> route('login.page') -> with('danger','Your Email Or Password Not Match');
    }
     
  }
}
