@extends('layouts.app')

@section('content')
        <a class="btn btn-outline-secondary my-3" href="/posts">Go back</a>
        <h1>{{$post->title}}</h1>
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
        <br> <br>
        <div>
            {{$post->body}}
        </div>
        <hr>
        
        <small><em>Written on {{$post->created_at}} by </em> <strong>{{$post->user->name ?? ''}}</strong></small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a class="btn btn-outline-secondary my-3" href="/posts/{{$post->id}}/edit">Edit</a>
                
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            @endif
        @endif
@endsection