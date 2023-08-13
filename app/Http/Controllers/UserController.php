<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
      
        $this->Limit = 4;
        
    }
   public function show(User $author){
 
   }
}
