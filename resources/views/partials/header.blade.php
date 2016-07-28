<header class="header black-bg">
    <link href='{{ asset('assets/img/favicon.png') }}' rel='shortcut icon'>
    <div class="top-menu">
        <div class="row">
            <div class="col-md-4" style="padding-top: 5px">
                <img  style="width:40px;height:50px;top:5%" src="{{ asset('assets/img/logo_header03.png') }}">
                <img  style="width:45px;height:50px;top:5%" src="{{ asset('assets/img/logo_header.png') }}">
                <img  style="width:50px;height:50px;top:5%" src="{{ asset('assets/img/logo_header02.png') }}">
            </div>
            <div class ="col-md-4">
                <h4 style="color: white; padding-top: 5px" >Servicio de solicitud de trámites del Registro Civil</h4>
            </div>
            <div class ="col-md-4" align ="right">


                @if(isset ($order_id))
                    <a href="{{route('/carrito', $order_id)}}" class="cart">
                                @if (!isset($count))
                                <i style="padding-top: 5px; padding-right: 13px" class="fa fa-shopping-cart fa-3x" aria-hidden="true"><span  class="badge orange">0</span></i>
                                @else
                                <i style="padding-top: 5px; padding-right: 13px" class="fa fa-shopping-cart fa-3x" aria-hidden="true"><span  class="badge green">{{$count}}</span></i>
                                @endif
                            <br>Trámites</a>
                @endif

            </div>

        </div>
    </div>

    <!-- FILE INPUT  -->

</header>
