<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
    <div class="container text-ceter mt-3 p-4 bg-white">
        <h1>Dashboard Admin</h1>
        <div class="row">
            <div class="col-12">
                @component('layout.alret', ['class'=>'warning','judul'=>'periingatan'])
               {{--  @slot('judul')
                    warning
                @endslot--}} 
                100 data mahasiswa perlu di perbaiki
                @endcomponent
                
                @component('layout.alret', ['class'=>'warning','judul'=>'awas'])
                {{-- @slot('judul')
                    danger
                @endslot--}} 
                Hari Ini deadline laporan perjlanan dinas
                @endcomponent

                @component('layout.alret', ['class'=>'warning','judul'=>'baik'])
               {{-- @slot('judul')
                    sucess
                @endslot --}} 
                Bulan depan cuti panjang..                
                @endcomponent
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.mi</body>
</html>