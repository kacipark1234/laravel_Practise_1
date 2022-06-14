<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
{
    $posts = Post::all();

    return View::make('home')
        ->with('title', 'My Blog')
        ->with('posts', $posts);
}
public function show($id)
{
    
    return view('home');
    //return view::make('home')->with('title','123');
}

    public function insert() //這行你會覺得它很奇怪
    {   

        $posts=DB::table('product')->insert([
            'name' => $_POST["username"],
            'price' => $_POST["password"]
        ]);

        DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        return view('ccc')->with('text','111')->with('password','222');
        
    }

    public function select() //這行你會覺得它很奇怪
    {   

        $results = DB::select('select * from users where id = ?', [1]);
        
    }

    public function update() //這行你會覺得它很奇怪
    {   

        $affected = DB::update('update users set votes = 100 where name = ?', ['John']);
        
    }

    public function delete() //這行你會覺得它很奇怪
    {   
        $deleted = DB::delete('delete from users');
        
        
    }



}
