<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Usercontroller extends Controller
{
    public function Adduser(){
 return view('Admin.adduser');

    }
}
