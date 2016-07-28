@include('partials.scripts')
<body class="fancy">
    <section id="container">
        @include('partials.header')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">
                    <h1>Selecciona un trámite</h1><br>
                    <div class="row">
                        <div class="col-md-6"><a class ="btn btn-primary purple" href ="{{route('/certificaciones')}}" ><i class="fa fa-file-text-o fa-5x"></i><br><br>Copia certificada</a></div>
                        <div class="col-md-6"><a data-toggle="modal" data-target="#constancias" class ="btn btn-primary blue"><i class="fa fa-file-text-o fa-5x"></i><br><br>Constancia de Inexistencia</a></div>
                    </div>
                </div>
                <div class="modal fade" id="constancias" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #0159BB">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Llena la forma</h4>
                            </div>
                            <div class="modal-body strong-black">
                                @include('constancias.form')
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>


</body>

