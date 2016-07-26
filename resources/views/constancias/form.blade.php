@include('partials.scripts')


<script type="text/javascript">
    $(function () {
        $('#datepicker').datetimepicker({
            format: 'DD/MM/YYYY'

        });
    });
    $(document).ready(function() {
        $('#acto').change(function (event){
            var selected = $(this).val();
            if (selected == 1){
                $('#var').html('<' +
                        '')
            }
            if (selected == 2){

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
                flastname: {
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
                }

            }
        });

    });
</script>
    <div class="container-fluid text-center top ">
        @include('messages.messages')
        <div class="row">

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
            <div class="row">
                <div class="form-group">
                    <div class="col-md-12">


                        <input type="button" value="generar">
                    </div>
                </div>
            </div>
            <div id="var">
            </div>
        </div>

    </div>




