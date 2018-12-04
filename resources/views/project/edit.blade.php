@extends('layouts.porject')

@section('content')
    <div class="container">
        <form action="/projects/{{$project->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="field">
              <label class="label">title</label>
              <div class="control">
                <input class="input" name="title" type="text" value="{{$project->title}}" placeholder="Text input">
              </div>
            </div>
            <div class="field">
              <label class="label">Username</label>
              <div class="control has-icons-left has-icons-right">
                    <textarea name="description"  class="textarea" placeholder="Textarea" >{{$project->description}}</textarea>
              </div>
            </div>
            <div class="field is-grouped is-grouped-centered">
              <div class="control">
                <button class="button is-link">Submit</button>
              </div>
              <div class="control">
                <button class="button is-text">Cancel</button>
              </div>
            </div>
        </form>
    </div>
@endsection
