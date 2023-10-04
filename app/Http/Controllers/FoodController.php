<?php

namespace App\Http\Controllers;

use App\Models\food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('foods.index');
        return view('/foods/index')->with('food',food::where('status','1')->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // echo ('Hola Admin');
        //dd($request);
        $ps = new food();
        $ps->name=$request->name;
        $ps->category=$request->category;
        $ps->description=$request->description;
        $ps->price=$request->price;
        $ps->img1=$request->img1;
        $ps->status=1;

        $ps->save();

        return redirect()->route('foods.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('foods/show')->with('foods',Food::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('foods/edit')->with('foods',Food::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ps=food::find($id);
        $ps->name=$request->name;
        $ps->category=$request->category;
        $ps->description=$request->description;
        $ps->price=$request->price;
        $ps->img1=$request->img1;
        $ps->status=1;

        $ps->save();

        return redirect()->route('foods.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ps=food::find($id);
        $ps->status=0;

        $ps->save();

        return redirect()->route('foods.index');
    }
}
