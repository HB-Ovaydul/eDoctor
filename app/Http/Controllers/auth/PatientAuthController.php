<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientAuthController extends Controller
{
    // Patient Register
  public function Register(Request $request)
  {
     return $request -> all();
  }
}
