@include('partials.scripts')

<body class="fancy">
<script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker({
            format: 'DD/MM/YYYY'

        });
    });
    $(document).ready(function() {
        $('#acto').change(function (event){
            var selected = $(this).val();
            if (selected == 1){
                $('#nameLbl').html('Nombre(s) del registrado:');
                $('#datepickerLbl').html("Fecha de nacimiento:");
                $('#datepicker').removeAttr('disabled');
            }
            if (selected == 2){
                $('#nameLbl').html('Nombre(s) del conyuge:');
                //$('#datepickerLbl').html("Fecha de nacimiento");
                $('#datepicker').attr('disabled', 'true');
            }
            if (selected == 3){
                $('#nameLbl').html('Nombre(s) del difunto:');
                $('#datepickerLbl').html("Fecha de defunción:");
                $('#datepicker').removeAttr('disabled');
            }
            if (selected == 4){
                $('#nameLbl').html('Nombre(s) del adoptado:');
                $('#datepickerLbl').html("Fecha de adopción:");
                $('#datepicker').removeAttr('disabled');
            }
            if (selected == 5){
                $('#nameLbl').html('Nombre(s) del divorciado:');
                $('#datepickerLbl').html("Fecha de divorcio:");
                $('#datepicker').removeAttr('disabled');
            }
            if (selected == 6){
                $('#nameLbl').html('Nombre(s) del sentenciado:');

                $('#datepicker').attr('disabled', 'true');
            }
            if (selected == 7){
                $('#nameLbl').html('Nombre(s) del reconocido:');

                $('#datepicker').attr('disabled', 'true');
            }
            if (selected == 8){
                $('#nameLbl').html('Nombre(s) del registrado:');
                $('#datepicker').attr('disabled', 'true');
            }
            if (selected == 9){
                $('#nameLbl').html('Nombre(s) del conyuge:');
                $('#datepickerLbl').html("Fecha de inscripción:");
                $('#datepicker').removeAttr('disabled');
            }
            if (selected == 10){
                $('#nameLbl').html('Nombre(s) del difunto:');
                $('#datepickerLbl').html("Fecha de defunción:");
                $('#datepicker').removeAttr('disabled');
            }

        });
        $('#form').bootstrapValidator({

            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'Campo Obligatorio'
                        }
                    }
                },
                flastname: {
                    validators: {
                        notEmpty: {
                            message: 'Campo Obligatorio'
                        }
                    }
                },
                acto: {
                    validators: {
                        notEmpty: {
                            message: 'Campo Obligatorio'
                        }
                    }
                }

            }
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
                        {!! Form::open(['route' => '/certificaciones/lista', 'method'=>'GET', 'id'=>'form']) !!}

                        <div class="form-group">
                            <div class="col-md-2" >
                                <span>Selecciona un acto:</span><br>
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
                                <span id="nameLbl">Nombre(s):</span><br>
                                {!!Form::text('name' ,null,['class'=>'form-control','id'=>'name','placeholder'=>'Nombre(s)'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <span id="flastnameLbl">Apellido paterno:</span><br>
                                {!!Form::text('flastname' ,null,['class'=>'form-control','id'=>'flastname','placeholder'=>'Apellido Paterno'])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <span id="mlastnameLbl">Apellido materno:</span><br>
                                {!!Form::text('mlastname' ,null,['class'=>'form-control','id'=>'mlastname','placeholder'=>'Apellido Materno'])!!}
                            </div>
                        </div>

                        <div class="form-group" style ="color: black">
                            <div class="col-md-2">
                                <span id="datepickerLbl" style="color:white">Fecha:</span><br>
                                <div class="input-group date" >
                                     <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                     </span>
                                     {!!Form::text('datepicker' ,null,['class'=>'form-control','id'=>'datepicker','placeholder'=>'Fecha'])!!}
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-2">
                                <button type="submit" class="btn pink" id="buscar" >
                                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    Buscar
                                </button>
                            </div>
                        </div>
                        <input type="hidden" name="order_id" value={{$order_id}}>
                        @if (isset($count))
                            <input type="hidden" name="count" value={{$count}}>
                        @endif
                        {!! Form::close() !!}
                    </div>


                    <hr>
                    @if (isset($tipo))
                        @if ($tipo == 1)
                            @include('certificaciones.documentPartials.nacimiento')
                        @endif
                        @if ($tipo == 2)
                            @include('certificaciones.documentPartials.matrimonio')
                        @endif
                        @if ($tipo == 3)
                            @include('certificaciones.documentPartials.defuncion')
                        @endif
                        @if ($tipo == 4)
                            @include('certificaciones.documentPartials.adopcion')
                        @endif
                        @if ($tipo == 5)
                            @include('certificaciones.documentPartials.divorcio')
                        @endif
                        @if ($tipo == 6)
                            @include('certificaciones.documentPartials.sentencia')
                        @endif
                        @if ($tipo == 7)
                            @include('certificaciones.documentPartials.reconocimiento')
                        @endif
                        @if ($tipo == 8)
                            @include('certificaciones.documentPartials.insdenac')
                        @endif
                        @if ($tipo == 9)
                            @include('certificaciones.documentPartials.insdemat')
                        @endif
                        @if ($tipo == 10)
                            @include('certificaciones.documentPartials.insdedef')
                        @endif
                    @endif
                    @if (isset($collection))
                        {!! $collection->setPath('')->appends(Input::query())->render()!!}
                    @endif
                </div>
            </section>
        </section>
    </section>
</body>


