<h4>Acta de inscripción de matrimonio</h4>
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
        <h4>Datos de los contrayentes</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row ">
    <div class="col-lg-6">
        <span>Nombre del contrayente</span>
        {!!Form::text('name' ,mb_convert_case($result->NOMBRE1, MB_CASE_TITLE, "UTF-8") .' '.mb_convert_case($result->PRIMER_AP1, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->SEGUNDO_AP1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Nombre de la contrayente</span>
        {!!Form::text('name' ,mb_convert_case($result->NOMBRE2, MB_CASE_TITLE, "UTF-8") .' '.mb_convert_case($result->PRIMER_AP2, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->SEGUNDO_AP2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>


</div>

<br>
<div class="row ">
    <div class="col-lg-6">
        <span>Fecha de nacimiento</span>
        {!!Form::text('date' ,mb_convert_case($result->FECHA_NAC1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'date','placeholder'=>'Fecha de nacimiento', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Fecha de nacimiento</span>
        {!!Form::text('place' ,mb_convert_case($result->FECHA_NAC2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'place','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
</div>

<br>
<div class="row">
    <div class="col-lg-12">
        <div class ="well well-sm strong-black" >
        {{$result->TEXTO}}   </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class ="well well-sm strong-black" >
            Anotaciones <br>
            {{$result->ANOTACION}}   </div>
    </div>
</div>