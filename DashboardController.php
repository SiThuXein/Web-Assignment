<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class DashboardController extends Controller
{
    public function index(){
        $Item = Item::paginate(10);
        return view("dashboard",compact(['Item']));
    }
    public function filter(){
        $rows = request()->rows;
        $Item = Item::paginate($rows);
        return view("dashboard",compact(['Item']));
    }
}
