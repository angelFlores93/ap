@include('partials.scripts')
<body class="fancy">
    <section id="container">
        @include('partials.headerUsers')
        <section id="container">
            <section class="wrapper site-min-height top">
                <div class="container-fluid text-center top trans">
                    <h1>Selecciona tu usuario</h1>
                    <table class="table table-responsive">
                        <thead>
                            <th>Nombre</th>
                            <th>Seleccionar</th>
                        </thead>
                        <tbody>

                        @if (isset($users))
                            @foreach($users as $user)
                                @if($user->id != 1)
                                <tr>
                                    <td>{{$user->name.' '. $user->lastname}}</td>
                                    <td style="width: 5px;"><a href="{{route('/auth/list', $user->id)}}"><button class="btn btn-xs pink tooltips" data-placement="top" data-original-title="Seleccionar"><i class="fa fa-check"></i></button></a></td>
                                </tr>
                                @endif
                            @endforeach
                        @endif
                        </tbody>
                    </table>

                </div>
            </section>
        </section>
    </section>
</body>

