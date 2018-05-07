<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="{{ asset('imgs/avatar-1.png') }}" class="avatar avatar-sm" alt="logo">
        <span class="small ml-1 d-md-down-none">{{ auth()->user()->name }}</span>
    </a>

    <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">Account</div>

        <a href="#" class="dropdown-item">
            <i class="fa fa-user"></i> Perfil
        </a>

        <div class="dropdown-header">Config</div>

        <a href="#" class="dropdown-item">
            <i class="fa fa-wrench"></i> Conf
        </a>

        <a href="#" class="dropdown-item">
            <i class="fa fa-lock"></i> Salir
        </a>
    </div>
</li>