  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand text-right" style="margin-left: 500px" href="{{ route('index') }}">Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="margin: auto">
        <li class="nav-item {{ Request::is('menu') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('menu') }}">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">Menu</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('beranda') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="staf">
          <a class="nav-link" href="{{ url('beranda') }}">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu1'] : 'Menu 1' }}</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('profil') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="profil">
          <a class="nav-link" href="{{ url('profil') }}">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu2'] : 'Menu 2' }}</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('informasi') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="informasi">
          <a class="nav-link" href="{{ url('informasi') }}">
            <i class="fa fa-fw fa-pencil"></i>
            <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu3'] : 'Menu 3' }}</span>
          </a>
        </li>
        <li class="nav-item {{ Request::is('staf') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="staf">
            <a class="nav-link" href="{{ url('staf') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu4'] : 'Menu 4' }}</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('desa') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="desa">
            <a class="nav-link" href="{{ url('desa') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu5'] : 'Menu 5' }}</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('wisata') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="wisata">
            <a class="nav-link" href="{{ url('wisata') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu6'] : 'Menu 6' }}</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('produk') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="produk">
            <a class="nav-link" href="{{ url('produk') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu7'] : 'Menu 7' }}</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('galeri') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="galeri">
            <a class="nav-link" href="{{ url('galeri') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu8'] : 'Menu 8' }}</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('berita') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="berita">
            <a class="nav-link" href="{{ url('berita') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu9'] : 'Menu 9' }}</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('kontak') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="kontak">
            <a class="nav-link" href="{{ url('kontak') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu10'] : 'Menu 10' }}</span>
            </a>
        </li>
        <li class="nav-item {{ Request::is('artikel') ? 'active' : '' }}" data-toggle="tooltip" data-placement="right" title="artikel">
            <a class="nav-link" href="{{ url('artikel') }}">
              <i class="fa fa-fw fa-pencil"></i>
              <span class="nav-link-text">{{ $setting->menu ? $setting->menu['menu11'] : 'Menu 11' }}</span>
            </a>
        </li>
      </ul>
      
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
					<i class="fa fa-fw fa-sign-out"></i>Logout</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
        </li>
      </ul>
    </div>
  </nav>