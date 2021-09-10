<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class BlogController extends Controller
{
    public function index()
    {
        return view('blog.home');
    }

    public function show($id)
    {
        $nilai = 'ini adalah linknya'. $id;
        $users = DB::table('users')->insert([
            ['username' => 'andis', 'password'=> '123jds']
        ]);

        $users = DB::table('users')->get();


        return view('blog.single', ['blog' => $nilai, 'users'=> $users]);
    }
}
