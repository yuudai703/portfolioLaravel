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

    public function create(){
        return view("blogs.create");
    }

    public function store(Request $request){

        DB::table("blogs")->insert([
            'title'=>$request->title,
            'contents'=>$request->contents
        ]);

        return view("blogs.create");

    }


    public function edit($id){

        return view("blogs.edit",[
            "blog"=>DB::table("blogs")->where('id',$id)->first()
        ]);
    }

    public function update(Request $request){
        DB::table("blogs")->where('id',$request->id)->update([
            'title'=>$request->title,
            'contents'=>$request->contents
        ]);

        return redirect()->route('blogShow', ['id'=>$request->id]);
    }
}
