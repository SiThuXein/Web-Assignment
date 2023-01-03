<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class EditCategoryController extends Controller
{
    public function index($id){
        $category = Category::find($id);
        return view("editCategory",compact(['category']));
    }

    public function update(){
        $name = request()->name;

        Category::where('id',request()->id)->update([
            'name' => $name,
            'status' => "Publish"
        ]);

        return redirect('/admin/dashboard/category');
}
}