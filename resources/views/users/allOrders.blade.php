@include('partials.scripts')

<body class="fancy">
    <section id="container">
        @include('partials.header')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">
                    <h1>Órdenes entrantes</h1>

                    <div class="checkbox" align="right">
                        {!! Form::open(['action'=>['usersController@toggle'],'role'=>'form'] )  !!}


                        @if (isset($flag))
                            @if ($flag == 0)
                                <label>
                                    <input type="checkbox" data-toggle="toggle" onchange="submit()">
                                    Mostrar todos
                                    <input type="hidden" name="flag" value="1">
                                    <input type="hidden" name="user" value={{$user}}>
                                </label>
                            @else
                                <label>
                                    <input type="checkbox" checked data-toggle="toggle" onchange="submit()">
                                    Mostrar todos
                                    <input type="hidden" name="flag" value="0">
                                    <input type="hidden" name="user" value={{$user}}>
                                </label>
                            @endif
                        @endif
                        {!! Form::close() !!}
                    </div>
                    @include('messages.messages')

                    <table class="table table-responsive">
                        <thead>
                            <th>Folio</th>
                            <th>Tipo</th>
                            <th>Estatus</th>
                            <th>Número de trámites</th>
                            <th>Consultar</th>
                            <th>Resolver</th>

                        </thead>
                        <tbody>

                        @if (isset($orders))
                            @foreach($orders as $order)
                                <tr>
                                    <td>{{$order->folio}}</td>
                                    <td>{{$order->tipo}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->numTramites}}</td>
                                    <td><a data-toggle="modal" data-target="#{{$order->folio}}"><button type="button" class="btn btn-xs purple" ><i class="fa fa-info"></i> </button></a></td>
                                    {!! Form::open(['action'=>['usersController@resolve'],'role'=>'form'] )  !!}
                                    @if ($order->status == 'No Pagado')
                                        <td style="width: 5px;"><a href="#"><button class="btn btn-xs green tooltips" data-placement="top" data-original-title="Resolver"><i class="fa fa-check"></i></button></a></td>
                                        <input type="hidden" name="user" value={{$user}}>
                                        <input type="hidden" name="idOrder" value={{$order->id}}>
                                    @else
                                        <td style="width: 5px;"><a href="#"><button class="btn btn-xs blue tooltips" data-placement="top" data-original-title="Resuelto" disabled><i class="fa fa-thumbs-up"></i></button></a></td>
                                    @endif
                                    {!! Form::close() !!}
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    @if (isset($orders))
                        {!! $orders->setPath('')->appends(Input::query())->render()!!}
                    @endif
                    @if (isset($orders))
                        @foreach($orders as $ord)
                            <div class="modal fade" id="{{$ord->folio}}" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Orden con folio {{$ord->folio}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                   
                </div>
            </section>
        </section>
    </section>
</body>
