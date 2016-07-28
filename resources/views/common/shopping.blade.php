@include('partials.scripts')

<body class="fancy">
    <section id="container">
        @include('partials.header')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">
                    <h1>Resumen de órdenes solicitadas</h1>
                    @include('messages.messages')
                    <div class="row">
                        <div class="col-md-2" >
                            <h4>Folio de orden: OP{{$order_id}}</h4>
                        </div>
                        <div class="col-md-2" >
                            <h4> Total: {{$total}}</h4>
                        </div>

                        <div class="col-md-2" >
                            <!-- FORM REQUEST TO CLOSE -->
                            {!! Form::open(['action'=>['certificacionesController@closeOrder'],'role'=>'form', 'target'=>'_blank'] )  !!}
                            <a href="#" ><button class="btn blue tooltips" data-placement="top" data-original-title="Imprimir">Imprimir órden de pago</button></a>
                            <input type="hidden" name="idOrder" value={{$order_id}}>
                            {!! Form::close() !!}
                        </div>

                        <div class="col-md-2" >
                            <a class="btn blue" href ="{{route('/certificaciones/mas', [$order_id, count($array)])}}">Solicitar más certificaciones</a>
                        </div>
                        <div class="col-md-3" >
                            <a class="btn blue" href ="{{route('/inicio')}}">Regresar al inicio</a>
                        </div>
                    </div>

                    <h3>Más detalles</h3>
                    <div class="table-responsive">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th>Trámite</th>
                                    <th>Costo</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($array as $cert)
                                    <tr>
                                        <td>Copia certificada de {{$cert->actos->description}}</td>
                                        <td>$91.00</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </section>
    </section>
</body>

