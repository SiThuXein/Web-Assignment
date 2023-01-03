<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class DeleteController extends Controller
{
    public function delete($id){
        $item = Item::find($id);
        $item->delete();
        return redirect()->back();
    }

    public function delete_category($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/dashboard/category');
    }
}
