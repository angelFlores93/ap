@include('partials.scripts')


<script type="text/javascript">

    $(document).ready(function() {

        $('#acto').change(function (event){
            var selected = $(this).val();
            if (selected == 1){
                $('#razon').html('<div class="form-group">'+
                        '<div class="col-md-12" >'+
                        '<span>Selecciona una razón:</span><br>'+
                    '<select class="form-control" id="rs" name="rs">'+
                        '<option value="">Razón...</option>'+
                        '<option value="Realizar registro ordinario de nacimiento de menor">Realizar registro ordinario de nacimiento de menor</option>'+
                        '<option value="Realizar registro extemporáneo de menor">Realizar regustro extemporáneo de menor</option>'+
                        '<option value="Realizar registro extemporáneo de mayor">Realizar regustro extemporáneo de mayor</option>'+
                        '<option value="Requerimiento de autoridad judicial">Requerimiento de autoridad judicial</option>'+
                        '<option value="Otro:_____________">Otro</option>'+
                    '</select>'+
                    '</div>'+
                    '</div>');
            }
            if (selected == 2){
                $('#razon').html('<div class="form-group">'+
                        '<div class="col-md-12" >'+
                        '<span>Selecciona una razón:</span><br>'+
                        '<select class="form-control" id="rs" name="rs">'+
                        '<option value="">Razón...</option>'+
                        '<option value="Contraer matrimonio">Contraer matrimonio</option>'+
                        '<option value="Acreditar concubinato">Acreditar concubinato</option>'+
                        '<option value="Realizar trámites para obtener pensión">Realizar trámites para obtener pensión</option>'+
                        '<option value="Requerimiento de autoridad judicial">Requerimiento de autoridad judicial</option>'+
                        '<option value="Otro:_____________">Otro</option>'+
                        '</select>'+
                        '</div>'+
                        '</div>');
            }
        });
        $('#rs').change(function(event){
            var selected = $(this).val();
            alert($(this));
            if (selected == 5){
                $('#otro').html('<div class="form-group">'+
                        '<div class="col-md-12" >'+
                        '<span>Menciona tu razón:</span><br>'+
                        '<input name="otro" id="otro" type="text" placeholder="Otra razón" class="form-control">'+
                        '</div></div>');
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
                acto: {
                    validators: {
                        notEmpty: {
                            message: 'Campo Obligatorio'
                        }
                    }
                },
                razon: {
                    validators: {
                        notEmpty: {
                            message: 'Campo Obligatorio'
                        }
                    }
                },
                otro: {
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
    <div class="container-fluid text-center top ">
        @include('messages.messages')
        <div class="row">
            {!! Form::open(['action'=>['constanciasController@add'],'role'=>'form', 'id'=>'form', 'target'=>'_blank'] )  !!}
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12" >
                        <span>Selecciona un acto:</span><br>
                        <select class="form-control" id="acto" name="acto">
                            <option value="">Acto...</option>
                            <option value="1">Nacimiento</option>
                            <option value="2">Matrimonio</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <span id="nameLbl">Nombre completo:</span><br>
                        {!!Form::text('name' ,null,['class'=>'form-control','id'=>'name','placeholder'=>'Nombre completo'])!!}
                    </div>
                </div>
            </div>
            <div id="razon" class="row">

            </div>
            <div id="otro" class="row">

            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">
                        <a href="#" ><button class="btn blue tooltips" data-dismiss="modal" type="submit" data-placement="top" data-original-title="Generar órden">Generar órden</button></a>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>

    </div>




