@include('partials.scripts')
<body class="small" >
    <section id="container">
        @include('partials.headerPdf')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top">
                    <br><br>
                    <br><br>
                    <div align="right">
                        <strong>ASUNTO: CONSTANCIA DE NO REGISTRO DE {{strtoupper($acto)}}</strong><br><strong>FOLIO: {{$folio}}</strong>
                    </div>
                    <strong>M. EN D. LORENA MONTES HERNÁNDEZ</strong><br>
                    <strong>DIRECTORA ESTATAL DEL REGISTRO CIVIL</strong><br>
                    <strong>DEL ESTADO DE QUERÉTARO</strong><br>
                    <strong>P R E S E N T E:</strong>
                    <br>
                    <p align="justify">Por medio del presente me permito solicitarle <strong>Constancia De No Registro De {{$acto}}</strong> a nombre de <strong>{{$nombre}}</strong>, esto con la finalidad de:
                    <table width="100%"><tr><td><input type="checkbox" checked="true"></td><td style="padding-left: 20px;"> <strong>{{$razon}}</strong></td></tr></table>
                    <p>Anexo los siguientes documentos: (Original y copia)</p>
                    @if($acto == 'nacimiento')
                        @include('pdf.nacReq')
                    @else
                        @include('pdf.matReq')
                    @endif
                    <br>
                    <p align="justify">Lo anterior de conformidad con lo dispuesto en el artículo 8° de la Constitución Política de los Estados Unidos Mexicanos, artículos 48, 50 gracción II del Código Civil del Estado de Querétaro, así como de los artículos 4, 11, 15 y 16 de la Ley de Procedimientos Administrativos del Estado de Querétaro vigentes.</p>
                    <p> Sin otro asunto en particular, le envío un cordial saludo.</p><br>
                    <div align="center"><strong>A T E N T A M E N T E<br>Santiago de Querétado, Qro., a {{$date}}</strong></div>
                    <br><br>
                    <div align="center">___________________________<br>Nombre y firma</div>
                    <p><strong>NOTA: Sólo en caso de que el titular del acta no sepa firmar o escribir, además de estampar su huella será necesario que dos personas mayores de edad, firmen y pongan su nombre como testigo, incluyendo la copia de su INE</strong></p>
                    <div class="row">
                        <div class="col-md-12">
                            <table width="100%" >
                                <tr>
                                    <td style="padding-left: 50%"><strong>Huella digital</strong></td>
                                    <td style="padding-left: 50%"><strong>Testigo 1 </strong></td>
                                    <td style="padding-left: 50%"><strong>Testigo 2</strong></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td style="padding-left: 15%">

                                        <br><br>
                                        <div align="center">___________________________<br>Nombre y firma</div>
                                    </td>
                                    <td style="padding-left: 10%">

                                        <br><br>
                                        <div align="center">___________________________<br>Nombre y firma</div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    @include('partials.footerPdf')
                </div>
            </section>
        </section>
    </section>

</body>



