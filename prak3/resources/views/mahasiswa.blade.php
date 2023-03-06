<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
    @extends('layout.master')
    @section('content')
    @parent
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Data Mahasiswa</h1>
        <div class="row">
            <div class="col-sm-8 col-md-8 m-auto">
                <ol class="list-group">
                    @forelse ($mahasiswa as $val)
                     <li class="list-group-item">{{ $val }}</li>
                    @empty
                    <div class="alret alert-dark d-inline-block">tidak ada data...</div>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>