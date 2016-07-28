@include('partials.scripts')
<body class="small" >
    <section id="container">
        @include('partials.headerPdf')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top">
                    <p><strong>Folio: {{$order->folio}}</strong></p>
                    <div align="center"><h1><strong>DIRECCIÓN ESTATAL DEL REGISTRO CIVIL</strong></h1></div>
                    <div align="center"><h1><strong>COMPROBANTE DE PAGO</strong></h1></div>
                    <table width="100%">
                        <tr>
                            <td><strong>Fecha:</strong></td>
                            <td>{{$date}}</td>
                        </tr>
                        <tr>
                            <td><strong>Concepto:</strong></td>
                            <td>Copia Certificada de acta</td>
                        </tr>
                        <tr>
                            <td><strong>Fundamento Jurídico:</strong></td>
                            <td>Art. 142 de la Let de Hacienda del Estado de Querétaro, vigente. <br>Factor de valor de calculo equivalente a $72.5</td>
                        </tr>
                    </table>

                    <h1>Resumen de la compra</h1>
                    <table width="100%">
                        <tr>
                            <td><strong>Documento</strong></td>
                            <td><strong>Costo</strong></td>
                        </tr>

                        @foreach($cert as $c)
                        <tr>
                            <td>Copia certificada de {{$c->actos->description}}</td>
                            <td>$91.00</td>
                        </tr>
                        @endforeach
                    </table>

                    <div align="right">
                        <h1>Total: {{$total}}</h1>
                    </div>
                </div>
            </section>
        </section>
    </section>

</body>



