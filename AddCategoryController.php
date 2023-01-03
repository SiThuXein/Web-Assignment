<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class AddCategoryController extends Controller
{
    public function index(){
        return view("addCategory");
    }
    public function create(){
        $name = request()->name;
        $imageName = request()->image->getClientOriginalName();
        Category::create([
            'name' => $name,
            'image' => $imageName,
            'status' => "Publish"
        ]);

        request()->image->move(public_path('images'),$imageName);

        return redirect('/admin/dashboard/category');
    }
}
