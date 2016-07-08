<h4>Acta de reconocimiento</h4>
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
        <h4>Datos del reconocido</h4>
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
        {!!Form::text('place' ,mb_convert_case($result->LOCALIDAD, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->MUNICIPIO_DESCR, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->ESTADO_DESCR, MB_CASE_TITLE, "UTF-8").', '.mb_convert_case($result->PAIS_DESCR, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'place','placeholder'=>'Sexo', 'disabled'])!!}
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
        {!!Form::text('curp' ,$result->EDAD,['class'=>'form-control text-center strong-black','id'=>'curp','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Datos del acta de nacimiento</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-2">
        <span>Oficialía No.</span>
        {!!Form::text('name' ,$result->OFICIALIA1,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Libro No.</span>
        {!!Form::text('name' ,$result->LIBRO1,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Acta No.</span>
        {!!Form::text('name' ,$result->ACTA1,['class'=>'form-control text-center strong-black','id'=>'name','disabled'])!!}
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
        <h4>Datos del reconocedor</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
        <br>
<div class="row">

    <div class="col-lg-6">
        <span>Abuelo paterno</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->NOMBRE_RECON, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->PRIMER_AP_RECON, MB_CASE_TITLE, "UTF-8").' '.mb_convert_case($result->SEGUNDO_AP_RECON, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Nacionalidad</span>
        {!!Form::text('gmaname' ,mb_convert_case($result->NACION_RECON, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Edad</span>
        {!!Form::text('gmaname' ,$result->EDAD_RECON.' años',['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
    <div class="col-lg-2">
        <span>Sexo</span>
        @if ($result->SEXO_REC == 'F')
            {!!Form::text('gender' ,'Femenino',['class'=>'form-control text-center strong-black','id'=>'gender','placeholder'=>'Sexo', 'disabled'])!!}
        @else
            {!!Form::text('gender' ,'Masculino',['class'=>'form-control text-center strong-black','id'=>'gender','placeholder'=>'Sexo', 'disabled'])!!}
        @endif
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Padres del reconocedor</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row">

    <div class="col-lg-6">
        <span>Padre</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->NOMBRE_PADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Madre</span>
        {!!Form::text('gmaname' ,mb_convert_case($result->NOMBRE_MADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">

    <div class="col-lg-6">
        <span>Nacionalidad</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->NACION_PADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Nacionalidad</span>
        {!!Form::text('gmaname' ,mb_convert_case($result->NACION_MADRE, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
    <div class="col-lg-4 bordered">
        <h4>Persona(s) que otorga(n) su consentimiento</h4>
    </div>
    <div class="col-lg-4">
        <hr class ="dashed">
    </div>
</div>
<br>
<div class="row">

    <div class="col-lg-6">
        <span>Nombre</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->NOMBRE_CONSEN1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Nacionalidad</span>
        {!!Form::text('gmaname' ,mb_convert_case($result->NACION_CONSEN1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Edad</span>
        {!!Form::text('gmaname' ,$result->EDAD_CONSEN1.' años',['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">

    <div class="col-lg-6">
        <span>Estado civil</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->EDO_CIVIL_CONSEN1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Nacionalidad</span>
        {!!Form::text('gmaname' ,mb_convert_case($result->PARENT_CONSEN1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">

    <div class="col-lg-12">
        <span>Domicilio(s)</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->DOMI_CONSEN1, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>


</div>
<br>
<br>
<div class="row">

    <div class="col-lg-6">
        <span>Nombre</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->NOMBRE_CONSEN2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Nacionalidad</span>
        {!!Form::text('gmaname' ,mb_convert_case($result->NACION_CONSEN2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>
    <div class="col-lg-3">
        <span>Edad</span>
        {!!Form::text('gmaname' ,$result->EDAD_CONSEN2.' años',['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">

    <div class="col-lg-6">
        <span>Estado civil</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->EDO_CIVIL_CONSEN2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>
    <div class="col-lg-6">
        <span>Nacionalidad</span>
        {!!Form::text('gmaname' ,mb_convert_case($result->PARENT_CONSEN2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
    </div>

</div>
<br>
<div class="row">

    <div class="col-lg-12">
        <span>Domicilio(s)</span>
        {!!Form::text('gpaname' ,mb_convert_case($result->DOMI_CONSEN2, MB_CASE_TITLE, "UTF-8"),['class'=>'form-control text-center strong-black','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
    </div>


</div>
<br>
<div class="row">

    <div class="col-lg-12">

        <div class ="well well-sm strong-black" >
            Anotaciones
        {{$result->ANOTACION}}   </div>

    </div>
</div>