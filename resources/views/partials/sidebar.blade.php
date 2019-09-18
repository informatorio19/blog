<ul class="sidebar navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>
    @role('superadmin')
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
      </a>
      <div class="dropdown-menu" aria-labelledby="pagesDropdown">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Roles y Permisos</h6>
        <a class="dropdown-item" href="{{route('roles.index')}}">Roles</a>
      <a class="dropdown-item" href="{{route('permisos.index')}}">Permisos</a>
      </div>
    </li>
    @endrole
    <li class="nav-item">
    <a class="nav-link" href="{{route('posts.index')}}">
        <i class="fab fa-fw fa-megaport"></i>
        <span>Posts</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('categorias.index')}}">
        <i class="fas fa-fw fa-tag"></i>
        <span>Categorias</span></a>
    </li>
  </ul>
