@include('partials.scripts')

<body class="fancy">
    <section id="container">
        @include('partials.header')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">
                    <h1>Vista previa</h1>
                    <div class="row">
                        <div class ="col-md-12 orange dope">
                            <h4>Es necesario que corrobores que los datos son correctos. En caso de que exista algún error, favor de presentarse en el MÓDULO DE INFORMACIÓN para que te asesoren en el proceso para modificar los datos incorrectos</h4>
                        </div>
                    </div>
                    <hr>
                    <h4>Acta de nacimiento</h4><hr>
                    <div class="row">
                        <h4>Registrado</h4>
                        <div class="col-lg-3">
                            <span>Nombre</span>
                            {!!Form::text('name' ,'Irena Chávez Cruz',['class'=>'form-control','id'=>'name','placeholder'=>'Apellido Paterno', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Sexo</span>
                            {!!Form::text('gender' ,'Femenino',['class'=>'form-control','id'=>'gender','placeholder'=>'Sexo', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Fecha de nacimiento</span>
                            {!!Form::text('date' ,'28/06/1960',['class'=>'form-control','id'=>'date','placeholder'=>'Fecha de nacimiento', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Lugar de nacimiento</span>
                            {!!Form::text('place' ,'Tancoyo ...asdf asdf',['class'=>'form-control','id'=>'place','placeholder'=>'Sexo', 'disabled'])!!}
                        </div>
                    </div>
                    <hr class ="dashed">
                    <div class="row">
                        <h4>Padres</h4>
                        <div class="col-lg-3">
                            <span>Nombre del padre</span>
                            {!!Form::text('fathersname' ,'Victor Chávez Chávez',['class'=>'form-control','id'=>'fathersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Nacionalidad del padre</span>
                            {!!Form::text('fathersbirthplace' ,'Mexicana',['class'=>'form-control','id'=>'fathersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Nombre de la madre</span>
                            {!!Form::text('mothersname' ,'Felicitas Cruz Cabrera',['class'=>'form-control','id'=>'mothersname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Nacionalidad de la madre</span>
                            {!!Form::text('mothersbirthplace' ,'Mexicana',['class'=>'form-control','id'=>'mothersbirthplace','placeholder'=>'Sexo', 'disabled'])!!}
                        </div>

                    </div>
                    <hr class ="dashed">
                    <div class="row">
                        <h4>Abuelos</h4>
                        <div class="col-lg-3">
                            <span>Abuelo paterno</span>
                            {!!Form::text('gpaname' ,'Simón Chávez',['class'=>'form-control','id'=>'gpaname','placeholder'=>'Apellido Paterno', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Abuela paterna</span>
                            {!!Form::text('gmaname' ,'Juana Chávez',['class'=>'form-control','id'=>'gmaname','placeholder'=>'Sexo', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Abuelo materno</span>
                            {!!Form::text('gpanamem' ,'Narno Cruz',['class'=>'form-control','id'=>'gpanamem','placeholder'=>'Sexo', 'disabled'])!!}
                        </div>
                        <div class="col-lg-3">
                            <span>Abuela materna</span>
                            {!!Form::text('gmanamem' ,'Simitria Cabrera',['class'=>'form-control','id'=>'gmanamem','placeholder'=>'Sexo', 'disabled'])!!}
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-md-12" align ="right">
                            <a style="width: 100%" href ="{{route('/carrito')}}" class ="btn orange">Añadir al carrito</a>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </section>
</body>

