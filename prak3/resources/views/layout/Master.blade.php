<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <title>@yield('title', 'Sistem Informasi Mahasiswa')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <ul class="nav">
            <li class="nav-item">
              <a class="nav-link @yield('menuMahasiswa')" href="/mahasiswa">Data Mahaisswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('menuDosen')" href="/dosen">Data Dosen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link @yield('menuGallery')" href="/gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('info',['fakultas' => 'FMIPA', 'Jurusan' => 'matematiks']) }}">info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/informasi/ekonomi/management">info</a>
            </li>
          </ul>
    </nav>

    @section('content')
    <div class="alert alert-primary">
      Sistem Infotmasi Mahasiswa
    </div>
    @show

    <footer class="bg-dark py-4 text-white mt-4">
        <div class="container">
          <a href="{{ url('informasi/FMIPA/Matematika') }}">Jurusan Matematika</a>
            Sistem Informasi Mahaisswa | Copyright &copy {{  date("Y") }}
        </div>
    </footer>
</body>
</html>