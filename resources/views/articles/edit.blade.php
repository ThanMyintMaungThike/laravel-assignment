@extends("layouts.app")
@section('content')
    <form class="container" action="{{route('articles.update', $article->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <label for="">Title</label>
            <input class="form-control" type="text" name='title' value="{{$article->title}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Slug</label>
            <input class="form-control" type="text" name='slug' value="{{$article->slug}}">
        </div>
        <div class="form-group mb-3">
            <label for="">Context</label>
            <input class="form-control" type="text" name='context' value="{{$article->context}}">
        </div>
        <div class="form-group mb-3">
            <label for="">excerpt</label>
            <input class="form-control" type="text" name='excerpt' value="{{$article->excerpt}}">
        </div>
        <button value="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

