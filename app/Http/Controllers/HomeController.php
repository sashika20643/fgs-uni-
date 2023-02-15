<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
   public function index(){
    $role=Auth::user()->role;
if($role==0){
return view('student.index');
}
elseif($role==1){
    return view('Admin.index');

}

   }
}
