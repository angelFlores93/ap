<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\actos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use SimpleXMLElement;

class certificacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actos = actos::all();

        return view('certificaciones/buscar')->with([
            'actos' => $actos
        ]);
    }
    public function preview(){
        return view('certificaciones/preview')->with([

        ]);
    }
    public function seek(Request $request){
        //dd($request);
        $validator = Validator::make($request->all(),[
            'acto'=>'exists:actos,id'
        ]);
        if ($validator->fails()){
        }
        else{
            $array = array();
            switch ($request->acto){
                case 1:
                    $array = [
                        'nombre1'=>$request->name,
                        'primer_ap1'=>$request->flastname,
                        'segundo_ap1'=> $request->mlastname,
                        'nombre2' => "",
                        'primer_ap2' => "",
                        'segundo_ap2' => "",
                        'nombre3' => "",
                        'primer_ap3' => "",
                        'segundo_ap3' => "",
                        'ano' => "",
                        'estado' => "",
                        'municipio' => "",
                        'oficialia' => "",
                        'libro' => "",
                        'acta' => "",
                        'tipo_bus1' => "",
                        'tipo_bus2' => "",
                        'tipo_bus3' => "",
                        'tipo_bus4' => "",
                        'tipo_bus5' => "",
                        'tipo_bus6' => "",
                        'tipo_bus7' => "",
                        'tipo_bus8' => "",
                        'tipo_bus9' => "",
                        'tipo_ord' => "0",
                        'fecha_reg' => "",
                        'fecha_nac' => $request->datepicker,
                        'tipo_consulta' => "0",
                        'curp' => ""
                        ];
                    break;
                case 2:
                    $array = [
                        'nombre1'=>$request->name,
                        'primer_ap1'=>$request->flastname,
                        'segundo_ap1'=> $request->mlastname,
                        'nombre2' => "",
                        'primer_ap2' => "",
                        'segundo_ap2' => "",
                        'ano' => "",
                        'estado' => "",
                        'municipio' => "",
                        'oficialia' => "",
                        'libro' => "",
                        'acta' => "",
                        'tipo_bus1' => "",
                        'tipo_bus2' => "",
                        'tipo_bus3' => "",
                        'tipo_bus4' => "",
                        'tipo_bus5' => "",
                        'tipo_bus6' => "",
                        'tipo_ord' => "0",
                        'fecha_reg' => "",
                        'tipo_consulta' => "0",
                    ];
                    break;
                case 3:
                    $array = [];
                    break;
                case 4:
                    $array = [];
                    break;
                case 5:
                    $array = [];
                    break;
                case 6:
                    $array = [];
                    break;
                case 7:
                    $array = [];
                    break;
                case 8:
                    $array = [];
                    break;
                case 9:
                    $array = [];
                    break;
                case 10:
                    $array = [];
                    break;
            }
            $actos = actos::all();
            $query = 'exec dbo.sp_busqueda_nac_PTT "'.$request->name.'","'.$request->flastname.'","'.$request->mlastname.'",null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,"'.$request->datepicker.'",0,null';
            $results = DB::connection('sqlsrv')->select($query);
            return view('certificaciones/buscar')->with([
                'actos' => $actos,
                'results' => $results
            ]);

        }


    }


    public function to_xml(array $arr, SimpleXMLElement $xml)
    {
        foreach ($arr as $k => $v) {
            is_array($v)
                ? array_to_xml($v, $xml->addChild($k))
                : $xml->addChild($k, $v);
        }
        return $xml;
    }
}
