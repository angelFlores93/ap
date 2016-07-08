<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <th>Folio</th>
            <th>Nombre del difunto</th>
            <th>Fecha de defunción</th>
            <th>Consultar</th>
        </tr>
        </thead>
        <tbody>
        @if (isset($results))
            @foreach($results as $res)
                <tr>
                    <td>{{$res->id_acta}}</td>
                    <td>{{$res->nombre1.' '.$res->primer_ap1.' '.$res->segundo_ap1}}</td>
                    <td>{{$res->fecha_reg}}</td>
                    <td style="width: 5px;"><a href="{{route('/certificaciones/consultar/vistaPrevia', [$res->id_acta, $tipo])}}"><button class="btn btn-xs pink tooltips" data-placement="top" data-original-title="Consultar"><i class="fa fa-eye"></i></button></a></td>
                </tr>
            @endforeach
        @endif
        <tr>
    </table>
</div>


