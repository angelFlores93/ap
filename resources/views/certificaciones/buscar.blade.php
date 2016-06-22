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
                    <!-- FORM LARAVEL START HERE -->
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-2" style="padding-top: 15px;">
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
                    </div>


                    <!-- LARAVEL FORM CLOSE TAG -->
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Primer apellido</th>
                                <th>Segundo apellido</th>
                                <th>Consultar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Irena</td>
                                <td>Chavez</td>
                                <td>Cruz</td>
                                <td style="width: 5px;"><a href="{{route('/certificaciones/vistaPrevia', 0)}}"><button class="btn btn-xs pink tooltips" data-placement="top" data-original-title="Consultar"><i class="fa fa-eye"></i></button></a></td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </section>
        </section>
    </section>
</body>

