@include('partials.scripts')

<body class="fancy">
    <section id="container">
        @include('partials.header')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">

                    @if (isset($tipo))
                        @if ($tipo == 1)
                            @include('certificaciones.previewPartials.nacimiento')
                        @endif
                        @if ($tipo == 2)
                            @include('certificaciones.previewPartials.matrimonio')
                        @endif
                        @if ($tipo == 3)
                            @include('certificaciones.previewPartials.defuncion')
                        @endif
                        @if ($tipo == 4)
                            @include('certificaciones.previewPartials.adopcion')
                        @endif
                        @if ($tipo == 5)
                            @include('certificaciones.previewPartials.divorcio')
                        @endif
                        @if ($tipo == 6)
                            @include('certificaciones.previewPartials.sentencia')
                        @endif
                        @if ($tipo == 7)
                            @include('certificaciones.previewPartials.reconocimiento')
                        @endif
                        @if ($tipo == 8)
                            @include('certificaciones.previewPartials.insdenac')
                        @endif
                        @if ($tipo == 9)
                            @include('certificaciones.previewPartials.insdemat')
                        @endif
                        @if ($tipo == 10)
                            @include('certificaciones.previewPartials.insdedef')
                        @endif
                    @endif
                    <br><br>
                    <!--div class="row" align ="center">
                        <!--div class="col-md-2" align ="center"-->
                        {!! Form::open(['action'=>['certificacionesController@add'],'role'=>'form'] )  !!}
                            <input type="hidden" name="cert" value={{$result->ID_ACTA}}>
                            <input type="hidden" name="acto" value={{$tipo}}>
                            <input type="hidden" name="order_id" value={{$order_id}}>


                            <button class="btn btn-xs pink tooltips" data-placement="top" data-original-title="Añadir">Añadir al carrito</button>
                        {!! Form::close() !!}
                        <!--/div-->
                    </div>
                </div>
            </section>
        </section>
    </section>
</body>
