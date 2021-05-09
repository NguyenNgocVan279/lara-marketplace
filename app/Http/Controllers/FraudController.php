<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fraud;

class FraudController extends Controller
{
    public function store(Request $request) {       
       Fraud::create([
           'reason'=>$request->reason,
           'email'=>$request->email,
           'message'=>$request->message,
           'ad_id'=>$request->ad_id
       ]);
       return back()->with('message','Báo cáo của bạn đã được ghi nhận. Cảm ơn bạn rất nhiều.');
    }
}
