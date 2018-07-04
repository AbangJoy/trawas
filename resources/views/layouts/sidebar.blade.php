  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{ route('index') }}">Admin</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{ url('menu') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Menu</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="staf">
          <a class="nav-link" href="{{ url('staf') }}">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Staf</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="desa">
          <a class="nav-link" href="{{ url('desa') }}">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Desa</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="wisata">
            <a class="nav-link" href="{{ url('wisata') }}">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Wisata</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="produk">
            <a class="nav-link" href="{{ url('produk') }}">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Produk</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="galeri">
            <a class="nav-link" href="{{ url('galeri') }}">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Galeri</span>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="berita">
            <a class="nav-link" href="{{ url('berita') }}">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text">Berita</span>
            </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
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