<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Exception;

class AddItem extends Controller
{
    public function store(Request $request) {


        try{
            $request->validate([
                'category' => 'required|numeric',
                'name' => 'required|string|max:255',
                'quantity' => 'required|numeric',
                'price' => 'required|numeric',
            ]);   
            Item::create([
                'category' => $request->category,
                'name' => $request->name,
                'quantity' => $request->quantity,
                'price' => $request->price,
            ]);
            return redirect('/inventory')->with('success', 'Item added successfully!');
        }   

        catch (Exception $e) {
        // Log the exception or handle errors
        \Log::error('Error adding item: ' . $e->getMessage());

        // Return error response
        return back()->with('error', 'Something went wrong, please try again!');
    }
}       

}
