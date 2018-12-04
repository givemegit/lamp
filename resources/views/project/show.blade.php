@extends('layouts.porject')

@section('content')
    <div class="container">
        <div class="card">
          <header class="card-header">
            <p class="card-header-title">
              {{$project->title}}
            </p>
            <a href="#" class="card-header-icon" aria-label="more options">
              <span class="icon">
                <i class="fas fa-angle-down" aria-hidden="true"></i>
              </span>
            </a>
          </header>
          <div class="card-content">
            <div class="content">
              {{$project->description}}
              <time datetime="2016-1-1">{{$project->created_at}}</time>
            </div>
          </div>
          <footer class="card-footer">
            <a href="/projects/{{$project->id}}/edit" class="card-footer-item">Edit</a>
            <form action="/projects/{{$project->id}}" method="post">
                @csrf
                @method('delete')
                <button class="button" class="card-footer-item">Delete</button>
            </form>
          </footer>
        </div>
    </div>
@endsection
