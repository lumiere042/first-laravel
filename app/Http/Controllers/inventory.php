<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class inventory extends Controller
{
    public function index() {
        $items = Item::all();
        


        return view('inventory', compact('items'));
    }
}
