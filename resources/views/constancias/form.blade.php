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
                        '<option value="1">Realizar registro ordinario de nacimiento de menor</option>'+
                        '<option value="2">Realizar regustro extemporáneo de menor</option>'+
                        '<option value="3">Realizar regustro extemporáneo de mayor</option>'+
                        '<option value="4">Requerimiento de autoridad judicial</option>'+
                        '<option value="5">Otro</option>'+
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
                        '<option value="1">Contraer matrimonio</option>'+
                        '<option value="2">Acreditar concubinato</option>'+
                        '<option value="3">Realizar trámites para obtener pensión</option>'+
                        '<option value="4">Requerimiento de autoridad judicial</option>'+
                        '<option value="5">Otro</option>'+
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
            {!! Form::open(['action'=>['constanciasController@add'],'role'=>'form', 'id'=>'form'] )  !!}
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
                        <a href="#"><button class="btn blue tooltips" type="submit" data-placement="top" data-original-title="Generar órden">Generar órden</button></a>
                    </div>
                </div>
            </div>

            {!! Form::close() !!}
        </div>

    </div>




