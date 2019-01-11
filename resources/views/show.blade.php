<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ $data->judul ? $data->judul : $data->nama }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-post.css') }}" rel="stylesheet">

  </head>

  <body style="width:50%; margin:auto" class="text-justify">

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <!-- Post Content Column -->
        <div class="col-lg-8">
          <!-- Title -->
          <h1 class="mt-4">{{ $data->judul ? $data->judul : $data->nama }}</h1>
          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Admin</a>
          </p>

          <hr>

          <!-- Date/Time -->
          <p>Posted on {{ $data->created_at }}</p>

          <hr>

          <!-- Preview Image -->
          <img class="img-fluid rounded" width="640" height="360" src="
            @if(Request::is('wisata/*'))
                {{ asset('storage/img/wisata/' . $data->foto) }}
            @elseif(Request::is('produk/*'))
                {{ asset('storage/img/produk/' . $data->foto) }}
            @elseif(Request::is('berita/*'))
                {{ asset('storage/img/berita/' . $data->foto) }}
            @elseif(Request::is('artikel/*'))
                {{ asset('storage/img/artikel/' . $data->foto) }}
            @endif
          " alt="">

          <hr>

          <!-- Post Content -->
          <p class="lead">{{ $data->deskripsi }}</p>

          <p>{{ $data->isi }}</p>

          <hr>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="text text-white" style="margin:auto; width: 50%;">Copyright &copy; Kecamatan Trawas </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js' ) }}"></script>

  </body>

</html>
