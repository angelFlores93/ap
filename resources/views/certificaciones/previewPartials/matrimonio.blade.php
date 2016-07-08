<h4>Acta de Matrimonio</h4>
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
        <span>Lugar de nacimiento</span>
        {!!Form::text('place' ,mb_convert_case($result->LOCALIDAD1, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->MUNICIPIO1, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->ESTADO1, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->PAIS1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'place','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <span>Edad</span>
        {!!Form::text('age' ,$result->EDAD1,['class'=>'form-control text-center strong-black','id'=>'age','placeholder'=>'Edad', 'disabled'])!!}

    </div>
    <div class="col-lg-4">
        <span>Fecha de nacimiento</span>
        {!!Form::text('date' ,mb_convert_case($result->FECHA_NAC1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'date','placeholder'=>'Fecha de nacimiento', 'disabled'])!!}
    </div>

    <div class="col-lg-4">
        <span>Nacionalidad</span>
        {!!Form::text('curp' ,mb_convert_case($result->NACIONALIDAD1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'curp','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row ">
    <div class="col-lg-6">
        <span>Nombre de la contrayente</span>
        {!!Form::text('name' ,mb_convert_case($result->NOMBRE2, MB_CASE_TITLE, "UTF-8") .' '.mb_convert_case($result->PRIMER_AP2, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->SEGUNDO_AP2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Lugar de nacimiento</span>
        {!!Form::text('place' ,mb_convert_case($result->LOCALIDAD2, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->MUNICIPIO2, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->ESTADO2, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->PAIS2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'place','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <span>Edad</span>
        {!!Form::text('age' ,$result->EDAD2,['class'=>'form-control text-center strong-black','id'=>'age','placeholder'=>'Edad', 'disabled'])!!}

    </div>
    <div class="col-lg-4">
        <span>Fecha de nacimiento</span>
        {!!Form::text('date' ,mb_convert_case($result->FECHA_NAC2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'date','placeholder'=>'Fecha de nacimiento', 'disabled'])!!}
    </div>

    <div class="col-lg-4">
        <span>Nacionalidad</span>
        {!!Form::text('curp' ,mb_convert_case($result->NACIONALIDAD2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'curp','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Padres del contrayente</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
        <br>
<div class="row">

    <div class="col-lg-6">
        <span>Nombre del padre</span>
        {!!Form::text('fathersname' ,mb_convert_case($result->NOMBRE_PADRE1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'fathersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Nombre de la madre</span>
        {!!Form::text('mothersname' ,mb_convert_case($result->NOMBRE_MADRE1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'mothersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <span>Nacionalidad del padre</span>
        {!!Form::text('fathersbirthplace' ,mb_convert_case($result->NACION_PADRE1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'fathersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

    <div class="col-lg-6">
        <span>Nacionalidad de la madre</span>
        {!!Form::text('mothersbirthplace' ,mb_convert_case($result->NACION_MADRE1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'mothersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Padres de la contrayente</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row">

    <div class="col-lg-6">
        <span>Nombre del padre</span>
        {!!Form::text('fathersname' ,mb_convert_case($result->NOMBRE_PADRE2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'fathersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Nombre de la madre</span>
        {!!Form::text('mothersname' ,mb_convert_case($result->NOMBRE_MADRE2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'mothersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <span>Nacionalidad del padre</span>
        {!!Form::text('fathersbirthplace' ,mb_convert_case($result->NACION_PADRE2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'fathersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

    <div class="col-lg-6">
        <span>Nacionalidad de la madre</span>
        {!!Form::text('mothersbirthplace' ,mb_convert_case($result->NACION_MADRE2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'mothersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Datos generales</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-12">
        <div class ="well well-sm strong-black" >
            Nombre(s) de la(s) persona(s) que da(n) su autorizacion por minoría de edad del(os) contrayente(s) o apoderados<br>
            Por el contrayente: {{$result->AUTORIZA_H}} <br>
            Por el contrayente: {{$result->AUTORIZA_M}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class ="well well-sm strong-black" >
            Autorización de la Secretaría de Gobernación en caso de contrayente(s) extrangero(s): {{$result->AUTOR_SECGOB}}
              </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class ="well well-sm strong-black" >
            Este contrato de matrimonio esta sujeto al régimen de:
            {{$result->REGIMEN}}   </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class ="well well-sm strong-black" >
            Anotaciones<br>
            {{$result->ANOTACION}}   </div>
    </div>
</div>
