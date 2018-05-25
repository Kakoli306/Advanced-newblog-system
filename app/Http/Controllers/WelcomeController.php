<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class WelcomeController extends Controller
{
    public function index(){
        $post=DB::table('posts')->get();


        return view('frontEnd.home.homeContent')->with('posts',$post);
    }

    public function userlike($id){

        //return ($id);

        DB::table('likes')->insert([
            'post_id' => $id,
            'user_id'=>'1',
            'email'=>'1',
        ]);
        return redirect('/');
    }



}
