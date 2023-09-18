<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /** home dashboard */
    public function index()
    {
        return view('dashboard.home');
    }

      /** profile user */
      public function userProfile()
      {
          return view('dashboard.profile');
      }

       /** teacher dashboard */
 


     /** student dashboard */
     public function studentDashboardIndex()
     {
         return view('dashboard.student_dashboard');
     }
}
