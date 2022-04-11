
@extends('website.main')

@section('container')

    
<h1>Kategori Berita </h1>

@foreach ($categories as $category)
    <article>
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>

            </li>
        </ul>
        
    </article>
@endforeach

@endsection