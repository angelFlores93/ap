<?php

namespace App\Http\Controllers;


use App\certificaciones;
use App\ordenPago;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\actos;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
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
        $order = new ordenPago();
        $order->status = 'No Pagado';
        $order->save();
        $order_id = ordenPago::orderBy('created_at', 'desc')->first()->id;
        return view('certificaciones/buscar')->with([
            'actos' => $actos,
            'order_id' => $order_id
        ]);
    }
    public function getBuscar($order_id, $count){
        $actos = actos::all();
        return view('certificaciones/buscar')->with([
            'actos' => $actos,
            'order_id' => $order_id,
            'count' => $count
        ]);
    }

    public function preview($id, $tipo, $order_id, $count){
        $sent = 0;
        switch ($tipo){
            //Nacimiento
            case 1:
                $query = 'exec dbo.d_sp_xml_nac '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                //dd($result[0);
                break;
            //Matrimonio
            case 2:
                $query = 'exec dbo.d_sp_xml_mat '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
            //Defunción
            case 3:
                $query = 'exec dbo.d_sp_xml_def '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
            //Adopción
            case 4:
                $query = 'exec dbo.d_sp_xml_ado '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
            //Divorcio
            case 5:
                $query = 'exec dbo.d_sp_xml_div '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
            //sentencia
            case 6:
                $query = 'exec dbo.d_sp_xml_sen '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                switch ($result[0]->TIPO_SENTENCIA){
                    case 1: $sent = 'tutela'; break;
                    case 2: $sent = 'ausencia'; break;
                    case 3: $sent = 'presunta muerte'; break;
                    case 4: $sent = 'incapacidad'; break;
                    case 5: $sent = 'estado de interdicción'; break;
                    case 6: $sent = 'otra'; break;
                }
                break;
            //reconocimiento
            case 7:
                $query = 'exec dbo.d_sp_xml_rec '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
            //ins de nac
            case 8:
                $query = 'exec dbo.d_sp_xml_insdenac '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
            //ins de mat
            case 9:
                $query = 'exec dbo.d_sp_xml_insdemat '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
            //ins de def
            case 10:
                $query = 'exec dbo.d_sp_xml_insdedef '.$id.',0';
                $result = DB::connection('sqlsrv')->select($query);
                break;
        }
        return view('certificaciones/preview')->with([
            'result' => $result[0],
            'tipo' => $tipo,
            'sent' => $sent,
            'order_id' => $order_id,
            'count' => $count
        ]);
    }
    public function seek(Request $request){
        $validator = Validator::make($request->all(),[
            'acto'=>'exists:actos,id',
            'name'=>'required',
            'flastname'=>'required'
        ]);
        if ($validator->fails()){

        }
        else{
            switch ($request->acto){
                //Nacimiento
                case 1:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_nac_PTT 1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,4,0,null';
                    $final_query = $this->adaptQuery(['1','2','3','4'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname, 'date' => $request->datepicker]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Matrimonio
                case 2:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_mat_PTT 1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,0';
                    $final_query = $this->adaptQuery(['1','2','3'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Defuncion
                case 3:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_def_PTT 1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,4,0';
                    $final_query = $this->adaptQuery(['1','2','3','4'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname, 'date' => $request->datepicker]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Adopcion
                case 4:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_ado_PTT 1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,4,0';
                    $final_query = $this->adaptQuery(['1','2','3','4'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname, 'date' => $request->datepicker]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Divorcio
                case 5:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_div_PTT 1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,0';
                    $final_query = $this->adaptQuery(['1','2','3','4'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Sentencia
                case 6:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_sen_PTT 1,2,3,null,null,null,null,null,null,null,null,null,0,null,0';
                    $final_query = $this->adaptQuery(['1','2','3'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Reconocimeitno
                case 7:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_rec_PTT 1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,null,0';
                    $final_query = $this->adaptQuery(['1','2','3'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Ins de Nacimiento
                case 8:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_insdenac_PTT 1,2,3,null,null,null,null,null,null,null,null,null,0,null,0';
                    $final_query = $this->adaptQuery(['1','2','3'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Ins de Matrimonio
                case 9:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_insdemat_PTT 1,2,3,null,null,null,null,null,null,null,null,null,null,null,null,null,null,null,0,null,0';
                    $final_query = $this->adaptQuery(['1','2','3','4'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
                //Ins de Defuncion
                case 10:
                    $request = $this->adaptRequest($request);
                    $query = 'exec dbo.sp_busqueda_insdedef_PTT 1,2,3,null,null,null,null,null,null,null,null,null,0,null,4,0';
                    $final_query = $this->adaptQuery(['1','2','3','4'],$query, ['name'=>$request->name, 'flastname'=>$request->flastname, 'mlastname'=>$request->mlastname, 'date' => $request->datepicker]);
                    $results = DB::connection('sqlsrv')->select($final_query);
                    break;
            }
            $total = count($results);
            if ($total == 1){
                Session::flash('message', 'Se encontró '.$total. ' resultado');
            }
            if ($total > 1){
                Session::flash('message', 'Se encontraron '.$total. ' resultados');
            }
            if ($total < 1){
                Session::flash('error', 'No se encontraron resultados');
            }

            $page = Input::get('page', 1);
            $perPage = 10;
            $offSet = ($page * $perPage) - $perPage ;
            $itemsForCurrentPage = array_slice($results, $offSet, $perPage, true);
            $collection = new LengthAwarePaginator($itemsForCurrentPage, count($results), $perPage, $page);
            $actos = actos::all();
            return view('certificaciones/buscar')->with([
                'actos' => $actos,
                'results' => $collection->items(),
                'tipo' => $request->acto,
                'collection' => $collection,
                'order_id' => $request->order_id,
                'count' => $request->count
            ]);
        }
    }
    public function add(Request $request)
    {
        $added = count((certificaciones::where('idActa', $request->cert)->where('folioOrden',$request->order_id)->get()));
        if ($added == 0){
            $certificacion = new certificaciones();
            $last_id_cert = certificaciones::orderBy('created_at', 'desc')->first()->id;
            $certificacion->folio = 'RC_' . ($last_id_cert + 1) . '_' . $request->cert . '_' . $request->acto;
            $certificacion->folioOrden = $request->order_id;
            $certificacion->idActa = $request->cert;
            $certificacion->acto = $request->acto;
            $certificacion->save();
        }
        else{
            Session::flash('error', 'Esta certificación ya se encuentra añadida');
        }
        $added = count((certificaciones::where('folioOrden',$request->order_id)->get()));
        $order = ordenPago::find($request->order_id);
        $order->folio = 'OP' . $request->order_id;
        $order->tipo = 'Certificación';
        $order->status = 'No Pagado';
        $order->numTramites = $added;
        $order->resueltoPor = 1;
        $order->save();
        // regresar todas las certificaciones con ese folio
        $all_cert = certificaciones::where('folioOrden', $request->order_id)->get();
        return view('common/shopping')->with([
            'order_id' => $request->order_id,
            'array' => $all_cert,
            'total' => '$'.(count($all_cert)*91).'.00',
            'count' => count($all_cert)
        ]);
    }

    public function getShopping($order_id){
        $all_cert = certificaciones::where('folioOrden',$order_id)->get();
        return view('common/shopping')->with([
            'order_id' => $order_id,
            'array' => $all_cert,
            'total' => '$'.(count($all_cert)*91).'.00',
            'count' => count($all_cert)
        ]);
    }
    public function closeOrder(Request $request){
        redirect()->route('/inicio');
        setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
        $date = strftime("%d de %B del %Y");
        $order = ordenPago::find($request->idOrder);
        $cert = certificaciones::where('folioOrden', $order->id)->get();
        $total = '$'.(count($cert)*91).'.00';

        $view =  \View::make('pdf.ordenpdf', compact('order', 'date', 'cert', 'total'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice.pdf');
    }
    public function adaptQuery($find, $query, $array){
        if (isset($array['name'])) {
            if ($array['name'] != 'null') {
                $array['name'] = '"' . $array['name'] . '"';
            }
        }
        if (isset($array['flastname'])) {
            if ($array['flastname'] != 'null') {
                $array['flastname'] = '"' . $array['flastname'] . '"';
            }
        }
        if (isset($array['mlastname'])) {
            if ($array['mlastname'] != 'null') {
                $array['mlastname'] = '"' . $array['mlastname'] . '"';
            }
        }
        if (isset($array['date'])) {
            if ($array['date'] != 'null') {
                $array['date'] = '"' . $array['date'] . '"';
            }
        }
        $new_query = str_replace($find, $array, $query);
        return $new_query;
    }
    public function adaptRequest(Request $request){
        if (!isset($request->name) || $request->name==""){
            $request->name = "null";
        }
        if (!isset($request->flastname) || $request->flastname==""){
            $request->flastname = "null";
        }
        if (!isset($request->mlastname) || $request->mlastname==""){
            $request->mlastname = "null";
        }
        if (!isset($request->datepicker) || $request->datepicker == ""){
            $request->datepicker = "null";
        }
        return $request;
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
