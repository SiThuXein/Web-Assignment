<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Owner;
use App\Models\Category;

class AddItemController extends Controller
{
    public function index(){
        $Category = Category::all();
        return view("addItem",compact(['Category']));
    }
    public function create(){
        $name = request()->name;
        $category = request()->category;
        $price = request()->price;
        $desc = request()->description;
        $item_condition = request()->item_condition;
        $item_type = request()->item_type;
        $imageName = request()->image->getClientOriginalName();
        $status = "Publish";
        $owner_name = request()->owner_name;
        $contact = request()->contact;
        $address = request()->address;

        Item::create([
            'name' => $name,
            'category' => $category,
            'price' => $price,
            'description' => $desc,
            'item_condition' => $item_condition,
            'item_type' => $item_type,
            'status' => $status,
            'image' => $imageName,
            'owner' => $owner_name
        ]);

        Owner::create([
            'name' => $owner_name,
            'contact' => $contact,
            'address' => $address
        ]);

        request()->image->move(public_path('images'),$imageName);


        return redirect('/admin/dashboard');
    }
}
