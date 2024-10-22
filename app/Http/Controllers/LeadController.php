<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store( Request $request){
        $form_data = $request->all();
    }
}
