<?php

namespace App\Http\Controllers;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function show($id)
    {
        return view('home')->with('id',$id);
        //return view::make('home')->with('title','123');
    }

    
    public function login() //這行你會覺得它很奇怪
    {   
        $posts=DB::table('product')->insert([
            'name' => $_POST["username"],
            'price' => $_POST["password"]
        ]);

        return view('ccc')->with('text','111')->with('password','222');
        
    }
    
    public function plogin() //這行你會覺得它很奇怪
    {   
        
        return view('pizzas');
    }
    public function get_mysql (Request $request)
    {        
        /*$posts=DB::table('product')->insert([
            'name' => $request->input('name'),
            'price' => 100
        ]);*/
        //return view('show_mysql', ['articles' => $posts]);    
        //$users = DB::select('select * from product where id = 1', [1]);

        //return view('show_mysql', ['articles' => $users]);    
    } 
    /*
    public function loginProcess(Request $request) //這行你會覺得它很奇怪
    {
        echo $request->input("username")."<br/>";
        echo $request->input("password")."<br/>";
    }*/
}
