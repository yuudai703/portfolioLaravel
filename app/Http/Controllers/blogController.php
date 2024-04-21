<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class blogController extends Controller
{
    public function documentsGet(){
        return response()->json(DB::table('blogs')->orderBy('id','desc')->get());
    }

    public function documentShow($id){

        return view('blogs.blog',[
            'blog'=>DB::table('blogs')->where('id',$id)->first()
        ]);
    }
}
