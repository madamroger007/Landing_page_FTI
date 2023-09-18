<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {

        $this->Limit = 4;

    }
   public function show(User $author){

   }
}
