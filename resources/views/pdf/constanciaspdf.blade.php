@include('partials.scripts')
<body class="small" >
    <section id="container">
        @include('partials.headerPdf')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top">
                    <strong>M. EN D. LORENA MONTES HERNÁNDEZ</strong><br>
                    <strong>DIRECTORA ESTATAL DEL REGISTRO CIVIL</strong><br>
                    <strong>DEL ESTADO DE QUERÉTARO</strong><br>
                    <strong>P R E S E N T E:</strong>
                    <br>
                    <p align="justify">Por medio del presente me permito solicitarle constancia de no registro de <strong>{{$acto}}</strong> a nombre de <strong>{{$nombre}}</strong>, esto con la finalidad de:
                    <br><br><strong>{{$razon}}</strong></p>
                    <p>Anexo los siguientes documentos:</p>
                    @if($acto == 'nacimiento')
                        @include('pdf.nacReq')
                    @else
                        @include('pdf.matReq')
                    @endif
                    <br>

                    @include('partials.footerPdf')
                </div>
            </section>
        </section>
    </section>

</body>



