<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index(){
        return view('main.block',[
            'data'=>DB::table('blogs')->orderBy('id','desc')->get()
        ]);
    }
}





//INSERT INTO blogs (title, contents)VALUES ('テストタイトル1', 'function helloWorld() {console.log("Hello, world!");');