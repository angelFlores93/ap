<?php

namespace App\Http\Controllers;

use App\constancias;
use App\ordenPago;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class constanciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function add(Request $request){


        $order = new ordenPago();
        $last_id = ordenPago::orderBy('created_at', 'desc')->first()->id;
        $order->folio = 'OP'.($last_id+1);
        $order->tipo = 'Constancia';
        $order->status = 'No Pagado';
        $order->numTramites = 1;
        $order->resueltoPor = 1;
        $order->save();
        // generar constancia
        $const = new constancias();
        $const->folio = 'RC_' . ($last_id + 1) . '_'  . $request->acto;
        $const->folioOrden = ($last_id + 1);
        $const->nombre = $request->name;
        $const->acto = $request->acto;
        $const->razon = $request->rs;
        $const->save();
        //Printing pdf
        setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
        $date = strftime("%d de %B del %Y");
        if ($request->acto == 1){
            $acto = 'nacimiento';
        }else{
            $acto = 'matrimonio';
        }
        $nombre = $request->name;
        $razon = $request->rs;
        $view =  \View::make('pdf.constanciaspdf', compact('acto', 'date', 'nombre', 'razon'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');

    }
    
}
