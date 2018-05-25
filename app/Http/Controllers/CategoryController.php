<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function category()
    {
        return view('frontEnd.categories.category');
    }
    public function addCategory(Request $request){
        $this->validate($request,[
            'category' => 'required'
        ]);
        $category = new Category;
        $category->category = $request->input('category');
        $category->save();
        return redirect('/home')->with('response','category Added successfully');
    }

}
