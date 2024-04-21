<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function store(Request $request){
        DB::table("contacts")->insert([
            'name'=>$request->name,
            'address'=>$request->address,
            'message'=>$request->message
        ]);
        return response()->json();
    }
}
