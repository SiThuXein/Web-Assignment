<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class EditController extends Controller
{
    public function index($id){
        $item = Item::find($id);
        return view("edit",compact(['item']));
    }

    public function update(){
        $name = request()->name;
        $category = request()->category;
        $price = request()->price;
        $desc = request()->desc;
        $item_condition = request()->item_condition;
        $item_type = request()->item_type;
        $owner = request()->owner;

        Item::where('id',request()->id)->update([
            'name' => $name,
            'category' => $category,
            'price' => $price,
            'description' => $desc,
            'item_condition' => $item_condition,
            'item_type' => $item_type,
            'owner' => $owner
        ]);

        return redirect('/admin/dashboard');
    }
}
