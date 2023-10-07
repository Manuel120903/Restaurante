<?php

namespace App\Http\Controllers;

use App\Models\order;
use App\Models\food;
use App\Models\table;
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

        $table = Table::all();
        
        $order = Order::where('status', '1')->get();

        return view('orders.index', compact('order','food','bebida','table'));


        
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
    
        $order = new order();
        $order->name=$request->name;
        $order->img1=$request->img1;
       
      
        $order->table_id=$request->table;
        $order->status=1;
        

        $order->save();

        if($request->hasFile("img1")){
            $file = $request->img1;
            $extension=$file->extension();
            $new_name="orders-".$order->id."_1.".$extension;
            $path = $file->storeAs('Imagenes',$new_name, 'public');
            $order->img1=$path;
            $order->save();    


        }

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
        return view('orders/show')->with('orders',order::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    
    {
        
        return view('orders/edit')->with('orders',order::find($id));
          
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
        
        
        $order = order::find($id);
        $order->name=$request->name;
        $order->table_id=$request->table;
        $order->img1=$request->img1;
        $order->status=1;


        $order->save();
        $order->name = $request->imput('name');

        $order->save();
        return redirect()->route('orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = order::find($id);
        $order->status=0;
        $order->save();

        return redirect()->route('orders.index');
        
    }
}
