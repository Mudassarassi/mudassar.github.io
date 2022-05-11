<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset ('temas/images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <li>
                        <a href="{{route('quadres.index')}}">
                            All Paintings</a>
                    </li>
                    <a class="js-arrow" href="#">
                        Paintings by Shop</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list" id="botiga">

                            <botigas-Component></botigas-Component>
                        </ul>
                </li>


            </ul>
        </nav>
    </div>
</aside>
