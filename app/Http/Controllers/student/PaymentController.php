<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\course_fee;
use App\Models\Stu_fee;
use App\Models\Payment;


use Auth;
class PaymentController extends Controller
{
    public function addpayment(){
        $feeses=course_fee::where('c_id',Auth::user()->course)->get();
        return view('student.pay',compact('feeses'));
    }

    public function pay(Request $request){
        $feeses=course_fee::where('c_id',Auth::user()->course)->get();
        $payment=new Payment;
        $payment->s_registraion=Auth::user()->registration_number;
        $payment->Amount=$request->amount;
        $image=$request->slip;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->slip->move('slips',$imagename);
        $payment->slip=$imagename;
        $payment->Date=$request->date;
        $payment->save();
foreach ($feeses as $fee) {
    $fname=$fee->id;
    if($request->$fname){
        $stu_fee=new Stu_fee;

        $stu_fee->s_registraion=Auth::user()->registration_number;
        $stu_fee->p_id=$payment->id;
        $stu_fee->feeid=$fname;
        $stu_fee->save();
    }
}



        return redirect()->back();
    }

    public function paymentdetail(){
        $feeses=course_fee::where('c_id',Auth::user()->course)->get();
        $stu_fee=Stu_fee::where('s_registraion',Auth::user()->registration_number)->get();


        return view('student.paymentdetails',compact('feeses','stu_fee'));
    }
}
