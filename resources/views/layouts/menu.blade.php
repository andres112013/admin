<nav id="sidebar">
    <div class="sidebar-header">
    <a href="{{url('/dashboard')}}"><h3> Bootstrap Sidebar</h3></a>
    </div>



    <ul class="list-unstyled components">
        <p>Dummy Heading</p>
        <li class="active">
            <a href="#personasSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Recursos</a>
            <ul class="collapse list-unstyled" id="personasSubmenu">
                <li>
                <a href="{{ url('/dashboard/recursos')}}">Ver Recursos</a>
                </li>
                <li>
                        <a href="#">Agregar recurso</a>
                </li>
                <li>
                    <a href="#">Cambio de cargo</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">About</a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>
                    <a href="#">Page 1</a>
                </li>
                <li>
                    <a href="#">Page 2</a>
                </li>
                <li>
                    <a href="#">Page 3</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#nilSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="nilSubmenu">
                <li>
                    <a href="#">Nildiert</a>
                </li>
                <li>
                    <a href="#">Nildiert</a>
                </li>
                <li>
                    <a href="#">Nildiert</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#">Portfolio</a>
        </li>
        <li>
            <a href="#">Contact</a>
        </li>
    </ul>

    
</nav>