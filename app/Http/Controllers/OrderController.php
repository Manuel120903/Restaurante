<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\food;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::where('status', '1')
        ->where('category', '!=', 'bebida')
        ->get();
        $bebida = Food::where('status', '1')
        ->where('category', 'bebida')
        ->get();

        
        $order = Order::where('status', '1')->get();

        return view('orders.index', compact('order','food','bebida'));


        
       // return view('tu_vista', compact('users', 'posts'));

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
    //echo('hola de nuevo');
        $order = new order();
        $order->name=$request->name;
        $order->img1=$request->img1;
        //Abajo ya hay un status, por lo pronto comento esto jsjsj
        //$order->status=$request->status;
       // $order->date=$request->date;
       // $order->caja_id=$request->caja_id;
       // $order->user_id=$request->user_id;
        //$order->detail_id=$request->detail_id;
        $order->status=1;


        $order->save();

        return redirect()->route('orders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
