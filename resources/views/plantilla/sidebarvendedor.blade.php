 <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                      <li class="nav-item">
                        <a class="nav-link active" href="{{url('home')}}" onclick="event.preventDefault(); document.getElementById('home-form').submit();"><i class="fa fa-list"></i>Alacompra</a>
                        <form id="home-form" action="{{url('home')}}" method="Get" style="display: none;">
                            {{csrf_field()}}
                        </form>
                    </li>
                     <center>
                        <img src="{{asset('img/avatars/logo.jpg')}}" class="img-avatar" width="150px" height="150px">
                    <li class="nav-title">
                        Menú
                    </li>
                    
                     <li class="nav-item">
                        <a class="nav-link" href="{{url('compra')}}" onclick="event.preventDefault(); document.getElementById('compra-form').submit();"><i class="fa fa-list"></i> Compras</a>
                        <form id="compra-form" action="{{url('compra')}}" method="GET" style="display: none;">
                            {{csrf_field()}}
                        </form>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="{{url('proveedor')}}" onclick="event.preventDefault(); document.getElementById('proveedor-form').submit();"><i class="fa fa-list"></i> Proveedores</a>
                        <form id="proveedor-form" action="{{url('proveedor')}}" method="GET" style="display: none;">
                            {{csrf_field()}}
                        </form>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('user')}}" onclick="event.preventDefault(); document.getElementById('user-form').submit();"><i class="fa fa-list"></i> Usuarios</a>
                        <form id="user-form" action="{{url('user')}}" method="GET" style="display: none;">
                            {{csrf_field()}}
                        </form>
                    </li>

                     <li class="nav-item">
                        <a class="nav-link" href="{{url('rol')}}" onclick="event.preventDefault(); document.getElementById('rol-form').submit();"><i class="fa fa-list"></i> Roles</a>
                        <form id="rol-form" action="{{url('rol')}}" method="GET" style="display: none;">
                            {{csrf_field()}}
                        </form>
                    </li>
                        
                    
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
