<?php

namespace App\Http\Controllers;
use App\Models\food;

use Illuminate\Http\Request;

class PublicFoodController extends Controller
{
    public function producList()
    {
        //return view('foods.index');
        return view('/foods/index')
        ->with('food',Food::where('status','1')->get());
    }

}
