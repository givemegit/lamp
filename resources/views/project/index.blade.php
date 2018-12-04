@extends('layouts.porject')

@section('content')
<div class="container is-full">
    <div class="columns">
        @foreach ($projects as $project)
            <div class="column">
                <a href="/projects/{{$project->id}}">
                    {{$project->title}}
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
