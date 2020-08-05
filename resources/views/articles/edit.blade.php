@extends('layout')


@section('head')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endsection

@section('content')
    <div class="container">
        <div class="title">
            <h3>Edit article</h3>

            <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')

                <div class="div-gap">
                    <label class="font-weight-bold">Title</label>
                    <input class="form-control input {{$errors->has('title') ? 'is-invalid': ''}}" rows="10" name="title" value="{{$article->title}}">
                    @if ($errors->has('title'))
                        <p style= "color:red">{{$errors->first('title')}}</p>
                    @endif
                </div>

                <div class="div-gap">
                    <label class="font-weight-bold">Excerpt</label>
                    <textarea class="form-control input {{$errors->has('excerpt') ? 'is-invalid': ''}}" rows="2" name="excerpt">{{$article->excerpt}}</textarea>
                    @if ($errors->has('excerpt'))
                        <p style= "color:red">{{$errors->first('excerpt')}}</p>
                    @endif
                </div>

                <div class="div-gap">
                    <label class="font-weight-bold">Body</label>
                    <textarea class="form-control input {{$errors->has('body') ? 'is-invalid': ''}}" rows="10" name="body">{{$article->body}}</textarea>
                    @if ($errors->has('body'))
                        <p style= "color:red">{{$errors->first('body')}}</p>
                    @endif
                </div>

                <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
            </form>
        </div>

    </div>
@endsection