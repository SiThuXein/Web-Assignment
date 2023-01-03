<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Item;

class FilterController extends Controller
{
    public function index(){
        $Category = Category::all();
        $Item = Item::all();
        return view("filter",compact(['Category','Item']));
    }
}
