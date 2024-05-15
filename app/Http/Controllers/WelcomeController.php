<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use carbon\carbon;

class WelcomeController extends Controller
{
    public function index(){
        DB::table('access_logs')->insert([
            'updated_at'=>carbon::now()->timezone('Asia/Tokyo'),
            'created_at'=>carbon::now()->timezone('Asia/Tokyo')
        ]);
        return view('main.block',[
            'data'=>DB::table('blogs')->orderBy('id','desc')->get()
        ]);
    }

    public function access(){
        return view('contacts.access',[
            'access'=>DB::table('access_logs')->orderBy('id','desc')->take(100)->get()
        ]);
    }
}





//INSERT INTO blogs (title, contents)VALUES ('テストタイトル1', 'function helloWorld() {console.log("Hello, world!");');