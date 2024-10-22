<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Lead;

class LeadController extends Controller
{
    public function store( Request $request){
        $form_data = $request->all();

        $validator = Validator::make($form_data,[
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:100'],
            'email' => ['required', 'max:150'],
            'phone' => ['required', 'max:20'],
            'content' => ['required'],
        ],
        $errors = [
            'name.required' => 'Il nome e obbligatorio',
            'name.max' => 'Il nome devve essere lungo al massimo :max caratteri',
            'surname.required' => 'Il cognome e obbligatorio',
            'surname.max' => 'Il cognome devve essere lungo al massimo :max caratteri',
            'email.required' => 'L email e obbligatorio',
            'email.max' => 'L email devve essere lungo al massimo :max caratteri',
            'phone.required' => 'Il telefono e obbligatorio',
            'phone.max' => 'Il telefono devve essere lungo al massimo :max caratteri',
            'content.required' => 'Il contenuto della mail e obbligatorio',
        ]
        );
        if($validator->fails()){
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ]);
        }    

        $new_lead = new Lead();
        $new_lead->fill($form_data);
        $new_lead->save();
    }
}
