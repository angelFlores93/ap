


        <h4>Acta de adopción</h4>
<br>
<div class="row">
    <div class="col-lg-2">
        <span>Oficialía No.</span>
        {!!Form::text('name' ,$result->OFICIALIA,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Libro No.</span>
        {!!Form::text('name' ,$result->LIBRO,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Acta No.</span>
        {!!Form::text('name' ,$result->ACTA,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Localidad</span>
        {!!Form::text('name' ,mb_convert_case($result->OFICIALIA_DESCR, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Fecha de registro</span>
        {!!Form::text('name' ,mb_convert_case($result->FECHA_REG, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>

</div>
<div class="row">
    <div class="col-lg-6">
        <span>Municipio</span>
        {!!Form::text('name' ,mb_convert_case($result->MUN_OFI_DESCR, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-6">
    <span>Entidad Federativa</span>
    {!!Form::text('name' ,mb_convert_case($result->EDO_OFI_DESCR, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Adoptado</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
        <br>
<div class="row ">
    <div class="col-lg-6">
        <span>Nombre</span>
        {!!Form::text('name' ,mb_convert_case($result->NOMBRE, MB_CASE_TITLE, "UTF-8") .' '.mb_convert_case($result->PRIMER_AP, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->SEGUNDO_AP, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Lugar de nacimiento</span>
        {!!Form::text('place' ,mb_convert_case($result->LOCALIDAD, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->MUNICIPIO, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->ESTADO, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->PAIS, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'place','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <span>Sexo</span>
        @if ($result->SEXO == 'F')
            {!!Form::text('gender' ,'Femenino',['class'=>'form-control text-center strong-black','id'=>'gender','placeholder'=>'Sexo', 'disabled'])!!}
        @else
            {!!Form::text('gender' ,'Masculino',['class'=>'form-control text-center strong-black','id'=>'gender','placeholder'=>'Sexo', 'disabled'])!!}
        @endif
    </div>
    <div class="col-lg-4">
        <span>Fecha de nacimiento</span>
        {!!Form::text('date' ,mb_convert_case($result->FECHA_NAC, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'date','placeholder'=>'Fecha de nacimiento', 'disabled'])!!}
    </div>

    <div class="col-lg-4">
        <span>Edad</span>
        {!!Form::text('edad' ,mb_convert_case($result->EDAD, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'edad','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Adoptantes</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
        <br>
<div class="row">

    <div class="col-lg-6">
        <span>Nombre</span>
        {!!Form::text('fathersname' ,mb_convert_case($result->NOMBRE_PADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'fathersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Nombre</span>
        {!!Form::text('mothersname' ,mb_convert_case($result->NOMBRE_MADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'mothersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <span>Nacionalidad del padre</span>
        {!!Form::text('fathersbirthplace' ,mb_convert_case($result->NACION_PADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'fathersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

    <div class="col-lg-6">
        <span>Nacionalidad de la madre</span>
        {!!Form::text('mothersbirthplace' ,mb_convert_case($result->NACION_MADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'mothersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">

    <div class="col-lg-12">

        <div class ="well well-sm strong-black" >
            Resolutivos<br>
        {{$result->RESOLUCION}}   </div>

    </div>
</div>