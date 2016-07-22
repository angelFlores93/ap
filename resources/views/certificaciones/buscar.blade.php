@include('partials.scripts')

<body class="fancy">
<script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker({
            format: 'DD/MM/YYYY'

        });
    });
    $body = $("body");

    $(document).on({
        ajaxStart: function() { $body.addClass("loading");    },
        ajaxStop: function() { $body.removeClass("loading"); }
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
                        <div id="form">
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
                                    <button type="submit" class="btn pink" id="buscar" >
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                        Buscar
                                    </button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                        </div>
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
<div class="modal"><!-- Place at bottom of page --></div>
<script type="text/javascript">
    $(document).ready(function() {

        $('#asdf').bootstrapValidator({
            message: 'Los valores no son válidos',
            feedbackIcons: {
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
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
                mlastname: {
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
                },
                datepicker:{
                    validators: {
                        date: {
                            format: 'DD/MM/YYYY',
                            message: 'Ingrese en formato dd/mm/aaaa'
                        }
                    }
                }
            }
        });});
</script>
</body>


