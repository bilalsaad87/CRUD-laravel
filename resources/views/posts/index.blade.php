@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img width="100%" src="/storage/cover_images/{{$post->cover_image}}" alt="{{$post->title}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>written on {{$post->created_at}} By {{$post->user->name}}</small>
                    </div>
                </div>
                
            </div>
        @endforeach
    @else
        <p>No post found</p>
    @endif
@endsection

