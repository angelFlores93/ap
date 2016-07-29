<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>Folio</th>
            <th>Nombre del registrado</th>
            <th>Nombre del padre</th>
            <th>Nombre de la madre</th>
            <th>Fecha de nacimiento</th>
            <th>Consultar</th>
        </tr>
        </thead>
        <tbody>
        @if (isset($results))
            @foreach($results as $res)
                <tr>
                    <td>{{$res->id_acta}}</td>
                    <td>{{$res->nombre1.' '.$res->primer_ap1.' '.$res->segundo_ap1}}</td>
                    <td>{{$res->nombre_padre.' '.$res->primer_ap_padre.' '.$res->segundo_ap_padre}}</td>
                    <td>{{$res->nombre_madre.' '.$res->primer_ap_madre.' '.$res->segundo_ap_madre}}</td>
                    <td>{{$res->fecha_nac}}</td>
                    @if (isset($count))
                        <td style="width: 5px;"><a href="{{route('/certificaciones/consultar/vistaPrevia', [$res->id_acta, $tipo, $order_id, $count])}}"><button class="btn btn-xs pink tooltips" data-placement="top" data-original-title="Consultar" id="loading"><i class="fa fa-eye"></i></button></a></td>
                    @else
                        <td style="width: 5px;"><a href="{{route('/certificaciones/consultar/vistaPrevia', [$res->id_acta, $tipo, $order_id, 0])}}"><button class="btn btn-xs pink tooltips" data-placement="top" data-original-title="Consultar" id="loading"><i class="fa fa-eye"></i></button></a></td>
                    @endif
                </tr>
            @endforeach
        @endif
        <tr>
    </table>
</div>


