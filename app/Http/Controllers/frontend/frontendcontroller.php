<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontendcontroller extends Controller
{
    /**
     * Home Page
     */

     public function ShowHomePage()
     {
        return view('frontend.home');
     }

     /**
      * Login Page
      */

      public function ShowLoginPage()
      {
        return view('frontend.login');
      }
      
      /**
       * Patient Register Page
       */

       public function PatientRegPage()
       {
         return view('frontend.patient.register');
       }
      /**
       * Patient Deshboard
       */

       public function PatientDeshPage()
       {
         return view('frontend.patient.deshboard');
       }

             
      /**
       * Doctor Register Page
       */

      public function DoctorRagPage()
      {
        return view('frontend.doctor.register');
      }
      /**
       * Doctor Dashboard
       */

      public function DoctorDeshPage()
      {
        return view('frontend.doctor.deshboard');
      }

}
