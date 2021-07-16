<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset ('temas/images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">

                 @auth
                 <li>
                    <a href="{{ route('reserva.show',  Auth::user()->id) }}">
                        <i class="fas fa-table"></i>Mi Reservas</a>
                </li>
                <li>
                    <a href="{{ route('reserva.index',  Auth::user()->id) }}">
                        <i class="fas fa-table"></i>New Booking</a>
                </li>


                @endauth
                @if (Auth::user()->is_admin)



                <li>
                    <a href="{{route('admin.index')}}">
                        <i class="fas fa-chart-bar"></i>Administrador</a>
                </li>
                @endif



            </ul>
        </nav>
    </div>
</aside>
