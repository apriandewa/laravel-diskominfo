@extends('website.main')

@section('container')
    
<h1>Selamat Datang di Halaman About Kominfo Inhu</h1>
<h3>{{ $name }}</h3>
<p>{{ $email }}</p>
<img src="img/{{ $image }}" alt="{{ $image }}" width="200">

@endsection