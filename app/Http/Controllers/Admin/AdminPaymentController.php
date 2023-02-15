<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course_fee;
use App\Models\Stu_fee;
use App\Models\Payment;

class AdminPaymentController extends Controller
{
    public function AdminPaymentView(){
        $payment=Payment::all();
        $data = Stu_fee::join('course_fees', 'stu_fees.feeid', '=', 'course_fees.id')
        ->select('stu_fees.*', 'course_fees.*')
        ->get();
        return view('Admin.payment',compact('payment','data'));

    }
}
