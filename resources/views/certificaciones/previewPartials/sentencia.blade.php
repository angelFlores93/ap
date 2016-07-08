<h4>Acta de sentencia de {{$sent}}</h4>
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
        <h4>Registrado</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
        <br>
<div class="row ">
    <div class="col-lg-12">
        <span>Nombre</span>
        {!!Form::text('name' ,mb_convert_case($result->NOMBRE, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->PRIMER_AP, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->SEGUNDO_AP, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
</div>
<div class="row">

    <div class="col-lg-3">
        <span>Edad</span>
        {!!Form::text('date' ,mb_convert_case($result->EDAD, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'date','placeholder'=>'Fecha de nacimiento', 'disabled'])!!}
    </div>

    <div class="col-lg-3">
        <span>CURP</span>
        {!!Form::text('gender' ,$result->CURP,['class'=>'form-control text-center strong-black','id'=>'gender','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Estado civil</span>
        {!!Form::text('civil' ,mb_convert_case($result->EDO_CIVIL, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'civil','placeholder'=>'Estado civil', 'disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Nacionalidad</span>
        {!!Form::text('date' ,mb_convert_case($result->NACIONALIDAD, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'date','placeholder'=>'Fecha de nacimiento', 'disabled'])!!}
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Acta de nacimiento del registrado</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-2">
        <span>Oficialía No.</span>
        {!!Form::text('name' ,$result->OFICIALIA_NAC,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Libro No.</span>
        {!!Form::text('name' ,$result->LIBRO_NAC,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Acta No.</span>
        {!!Form::text('name' ,$result->ACTA_NAC,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Localidad</span>
        {!!Form::text('name' ,mb_convert_case($result->OFICIALIA1_DESCR, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Fecha de registro</span>
        {!!Form::text('name' ,mb_convert_case($result->FECHA_REG1, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>

</div>
<div class="row">
    <div class="col-lg-6">
        <span>Municipio</span>
        {!!Form::text('name' ,mb_convert_case($result->MUN_OFI1_DESCR, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Entidad Federativa</span>
        {!!Form::text('name' ,mb_convert_case($result->EDO_OFI1_DESCR, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Fehca de resolución y tribunal que dicta sentencia</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <span>Autoridad</span>
        {!!Form::text('name' ,mb_convert_case($result->AUTORIDAD, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>

</div>
<br>
<div class="row">
    <div class="col-lg-6">
        <span>Fecha de resolucion</span>
        {!!Form::text('name' ,mb_convert_case($result->FECHA_RESOL, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Fecha de ejecutoria</span>
        {!!Form::text('name' ,mb_convert_case($result->FECHA_ESTADO, MB_CASE_TITLE, "UTF-8") ,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
</div>
<br>
<div class="row">

    <div class="col-lg-12">

        <div class ="well well-sm strong-black" >
            Resolución<br>
        {{$result->TEXTO}}   </div>

    </div>
</div>
<div class="row">

    <div class="col-lg-12">

        <div class ="well well-sm strong-black" >
            Anotaciones<br>
            {{$result->ANOTACION}}   </div>

    </div>
</div>