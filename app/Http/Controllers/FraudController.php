<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fraud;

class FraudController extends Controller
{
    public function store(Request $request) {
        dd($request->all());
       /*  $fraud = Fraud::create([

        ]); */
    }
}
