<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class SwitchController extends Controller
{
    public function index($id){
        Category::where('id',$id)->update([
            "status" => "Publish"
        ]);
        return redirect("/admin/dashboard/category");
    }
}
