
@extends('website.main')

@section('container')

    
<h1 class="mb-5">{{ $title }}</h1>

<div class="container">
    <div class="row">
@if ($blogs->count())

    <div class="card text-center">
        <div class="card-header">
          Berita Terbaru
        </div>
        <div class="card-body" >
            <img src="https://source.unsplash.com/1200x400/?" class="card-img-top mb-3" alt="..." >
            <h4><a href="/blogs/{{ $blogs[0]->slug }}" class="text-decoration-none text-dark mt-3">{{ $blogs[0]->title }}</a></h4>
            
          <small class="text-muted">Oleh : <a href="/authors/{{ $blogs[0]->author->username }}"class="text-decoration-none">{{ $blogs[0]->author->name }}</a> in <a href="/categories/{{ $blogs[0]->category->slug }}"class="text-decoration-none "> {{ $blogs[0]->category->name }}</a> {{ $blogs[0]->created_at->diffForHumans() }}</small>
         
          <p class="card-text">{{ $blogs[0]->excerpt }}</p>
          <a href="/blogs/{{ $blogs[0]->slug }}" class="btn btn-primary">Selengkapnya</a>
        </div>
       
      </div>
    
    </div>
    
    @else
    
    <p class="text-center fs-4">Belum ada postingan</p>
    
    @endif
</div>
</div>


<div class="container mt-3">
    <div class="row">
        @foreach ($blogs->skip(1) as $blog)
        <div class="col-md-4 mb-3">

            <div class="card" >
                <div class="position-absolute bg-dark px-3 py-2 text-white" style="background-color: rgba(0, 0, 0, 0,)"><a href="categories/{{ $blog->category->slug }}" class="text-decoration-none">{{ $blog->category->name }}</a></div>
                <img src="https://source.unsplash.com/500x400/?" class="card-img-top mb-3" alt="..." >
                <div class="card-body">
                    <h4 class="card-title"><a href="/blogs/{{ $blog->slug }}" class="text-decoration-none text-dark">{{ $blog->title }}</a></h4>
                    <small class="text-muted">Oleh : <a href="/authors/{{ $blog->author->username }}"class="text-decoration-none">{{ $blog->author->name }}</a> {{ $blog->created_at->diffForHumans() }}</small>

                  <p class="card-text">{{ $blog->excerpt }}</p>
                 
                  <a href="/blogs/{{ $blog->slug }}"class="btn btn-primary"> Selengkapnya..</a>
                </div>
              </div>
            </div>
@endforeach
        </div>
    </div>



@endsection