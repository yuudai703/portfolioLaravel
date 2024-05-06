<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ContactController extends Controller
{
    public function store(Request $request){
        DB::table("contacts")->insert([
            'name'=>$request->name,
            'address'=>$request->address,
            'message'=>$request->message,
            'created_at'=>carbon::now()
        ]);
        return response()->json();
    }

    public function index(){
        return view("contacts.index",[
            'contacts'=>DB::table("contacts")->get()
        ]);
    }
}
