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
        if($request->flag == 0)
            $orders = ordenPago::where('status','No Pagado')->paginate(10);
        else
            $orders = ordenPago::orderBy('id')->paginate(10);
        Session::flash('message', 'Se ha resuelto la orden correctamente');
        return view('users/allOrders')->with([
            'orders' => $orders,
            'user' => $request->user,
            'flag' => $request->flag,
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
    public function invalid(Request $request){
        $order = ordenPago::find($request->idOrder);
        $order->status = 'No procede';
        $order->resueltoPor = $request->user;
        $order->save();
        Session::flash('message', 'Se ha guardado la orden correctamente');
        if($request->flag == 0)
            $orders = ordenPago::where('status','No Pagado')->paginate(10);
        else
            $orders = ordenPago::orderBy('id')->paginate(10);
        $acto = actos::find((ordenPago::find(2)->constancia[0]->acto))->description;
        return view('users/allOrders')->with([
            'orders' => $orders,
            'user' => $request->user,
            'flag' => $request->flag,
            'acto' => $acto
        ]);
    }
}
