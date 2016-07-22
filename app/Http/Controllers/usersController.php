<?php

namespace App\Http\Controllers;

use App\actos;
use App\ordenPago;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class usersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users/all')->with([
            'users' => $users
        ]);
    }
    public function listOrders($id){
        $orders = ordenPago::where('status','No Pagado')->paginate(10);
        $acto = actos::find((ordenPago::find(2)->constancia[0]->acto))->description;
        return view('users/allOrders')->with([
            'orders' => $orders,
            'user' => $id,
            'flag' => 0,
            'acto' => $acto
        ]);

    }
    public function resolve(Request $request){
        $order = ordenPago::findOrFail($request->idOrder);
        $acto = actos::find((ordenPago::find(2)->constancia[0]->acto))->description;
        $order->status = 'Pagado';
        $order->resueltoPor = $request->user;
        $order->save();
        $orders = ordenPago::where('status','No Pagado')->paginate(10);
        Session::flash('message', 'Se ha resuelto la orden correctamente');
        return view('users/allOrders')->with([
            'orders' => $orders,
            'user' => $request->user,
            'flag' => 0,
            'acto' => $acto
        ]);
    }
    public function toggle(Request $request){
        $acto = actos::find((ordenPago::find(2)->constancia[0]->acto))->description;
        if ($request->flag == 1){
            $orders = ordenPago::orderBy('id')->paginate(10);
            $flag = 1;
        }else{
            $orders = ordenPago::where('status','No Pagado')->paginate(10);
            $flag = 0;
        }
        return view('users/allOrders')->with([
            'orders' => $orders,
            'user' => $request->user,
            'flag' => $flag,
            'acto' => $acto
        ]);
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
        //
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
