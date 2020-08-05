@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>{{$article->title}}</h2>
                    <a href="/articles/{{$article->id}}/edit">Edit</a>
                    <p>
                        <img src="https://via.placeholder.com/150" alt="" class="image image-full">
                    </p>

                    {{$article->body}}

                </div>
            </div>
        </div>
    </div>

@endsection