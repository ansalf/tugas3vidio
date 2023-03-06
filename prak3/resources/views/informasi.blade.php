@extends('layout.master')
@section('title', 'informasi fakultas')

@section('content')
<div class="container text-center mt-3 p-4 bg-white">
    <h1>informasi fakultas {{ $data[0] }}, jurusan {{ $data[1] }}</h1>
</div>
@endsection