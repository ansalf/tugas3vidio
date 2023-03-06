<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>@yield('title', 'Sistem Informasi Mahasiswa')</title>
</head>
<body>
    @extends('layout.master')
    @section('title', 'Gallery')
    @section('menuGallery', 'active')

    @section('content')
    <div class="container text-center mt-3 p-4 bg-white">
        <h1>Gallery</h1>
        <div class="row">

            <div class="col-4">
                <img src="https://i.pinimg.com/564x/6f/44/d5/6f44d58aa670930d2b9cbb16e63d83ef.jpg"
                class="img-thumbnail img-fluid">
            </div>

            <div class="col-4">
                <img src="https://i.pinimg.com/564x/76/f7/ac/76f7acdf12d635faf1fa2d60325717e2.jpg"
                class="img-thumbnail img-fluid">
            </div>

            <div class="col-4">
                <img src="https://i.pinimg.com/564x/1c/65/8e/1c658e6102e6c56094fff374241f8560.jpg"
                class="img-thumbnail img-fluid">
            </div>

            <div class="col-4">
                <img src="https://i.pinimg.com/564x/25/9b/45/259b455635a015dba9072a04e715681e.jpg"
                class="img-thumbnail img-fluid">
            </div>

            <div class="col-4">
                <img src="https://i.pinimg.com/564x/c5/62/b4/c562b40140a3042137058a4e25e7e675.jpg"
                class="img-thumbnail img-fluid">
            </div>

            <div class="col-4">
                <img src="https://i.pinimg.com/474x/e7/61/2b/e7612b95b862744692762848edd77f18.jpg" 
                class="img-thumbnail img-fluid">
            </div>
        </div>
    </div>
    @endsection
</body>
</html>