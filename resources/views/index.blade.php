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
                        <div class="col-md-6"><a class ="btn btn-primary blue" href ="#" ><i class="fa fa-file-text-o fa-5x"></i><br><br>Constancia de Inexistencia</a></div>
                    </div>
                </div>
            </section>
        </section>
    </section>
</body>

