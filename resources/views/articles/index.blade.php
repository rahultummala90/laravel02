@extends('layout')

@section('content')

<div id="wrapper">
    <div id="articles" class="container">
        <div>
            <a href="/articles/create">Create an article</a>
        </div>
        <div>
            @foreach ($articles as $article)
                <div class="content">
                    <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                    <p>
                        <img src="https://via.placeholder.com/150" alt="" class="image" />
                    </p>
                    <p>{{$article->excerpt}}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection