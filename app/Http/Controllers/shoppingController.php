<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class shoppingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('common/shopping')->with([
            
        ]);
    }

    public function add(Request $request){
        

        return view('common/shopping')->with([

        ]);
    }

}
