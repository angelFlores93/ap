@include('partials.scripts')

<body class="fancy">
<script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker({
            format: 'DD/MM/YYYY'

        });
    });
</script>
    <section id="container">
        @include('partials.header')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">
                    <h1>Busca tu acta</h1>
                    @include('messages.messages')

                    <div class="row">
                        {!! Form::open(['route' => '/certificaciones/lista', 'method'=>'GET']) !!}
                        <div class="form-group">
                            <div class="col-md-2" >
                                <select class="form-control" id="acto" name="acto">
                                    <option value="">Acto</option>
                                    @if( isset($actos))
                                        @foreach($actos as $acto)
                                            <option value="{{  $acto->id  }}" > {{ $acto->description}}  </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                {!!Form::text('name' ,null,['class'=>'form-control','id'=>'firstname','placeholder'=>'Nombre(s)'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                {!!Form::text('flastname' ,null,['class'=>'form-control','id'=>'flastname','placeholder'=>'Apellido Paterno'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                {!!Form::text('mlastname' ,null,['class'=>'form-control','id'=>'mlastname','placeholder'=>'Apellido Materno'])!!}
                            </div>
                        </div>
                        <div class="form-group" style ="color: black">
                            <div class="col-md-2">
                                <div class="input-group date" >
                                     <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                     {!!Form::text('datepicker' ,null,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Fecha de Nacimiento'])!!}
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" class="btn pink" >
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    Buscar
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>



                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Folio</th>
                                <th>Nombre del registrado</th>
                                <th>Fecha de registro</th>
                                <th>Nombre del padre</th>
                                <th>Nombre de la madre</th>
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
                                        <td>{{$res->nombre_padre.' '.$res->primer_ap_padre.' '.$res->segundo_ap_padre}}</td>
                                        <td>{{$res->nombre_madre.' '.$res->primer_ap_madre.' '.$res->segundo_ap_madre}}</td>

                                        <td style="width: 5px;"><a href="{{route('/certificaciones/consultar/vistaPrevia', $res->id_acta)}}"><button class="btn btn-xs pink tooltips" data-placement="top" data-original-title="Consultar"><i class="fa fa-eye"></i></button></a></td>
                                    </tr>
                                @endforeach
                            @endif
                            <tr>


                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </section>
        </section>
    </section>
</body>

