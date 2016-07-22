@include('partials.scripts')

<body class="fancy">
    <section id="container">
        @include('partials.header')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">
                    <h1>Resumen de órdenes solicitadas</h1>
                    <div class="row">
                        <div class="col-md-3" >
                            <h4>Folio de orden: 2</h4>
                        </div>
                        <div class="col-md-3" >
                            <h4> Total: $200</h4>
                        </div>
                        <div class="col-md-3" >
                            <!-- FORM REQUEST TO CLOSE -->
                            <a class="btn blue" href ="#">Imprimir órden de pago</a>
                        </div>
                        <div class="col-md-3" >
                            <a class="btn blue" href ="{{route('/inicio')}}">Solicitar más trámites</a>
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
                                <tr>
                                    <td>Copia certificada de nacimiento</td>
                                    <td>$100</td>
                                </tr>
                                <tr>
                                    <td>Copia certificada de nacimiento</td>
                                    <td>$100</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </section>
        </section>
    </section>
</body>

