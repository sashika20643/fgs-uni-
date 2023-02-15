<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course_fee;
use App\Models\Stu_fee;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function AdminPaymentView(){
        $feeses=Payment::all();
        $data = StuFee::join('course_fees', 'stu_fees.feeid', '=', 'course_fees.id')
        ->select('stu_fees.*', 'course_fees.*')
        ->get();
        return view('Admin.payment',compact('feeses','data'));

    }
}
