
@extends('website.main')

@section('container')

    
<h1>{{ $blog->title }}</h1>

<p>Oleh : <a href="/authors/{{ $blog->author->username }}"class="text-decoration-none">{{ $blog->author->name }}</a> in <a href="/categories/{{ $blog->category->slug }}"class="text-decoration-none"> {{ $blog->category->name }}</a></p>
      
        <p>{!! $blog->body !!}</p>

  <a href="/blogs" class="text-decoration-none d-block mt-3">Back To Blog</a>

@endsection