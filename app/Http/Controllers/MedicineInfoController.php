<?php

namespace App\Http\Controllers;

use App\Drug;
use Illuminate\Http\Request;
use Validator;

class MedicineInfoController extends Controller
{
    public function ShowData()
    {
        $drug = Drug::all();
        return view('MedicineInfo',compact('drug'));
    }
}
