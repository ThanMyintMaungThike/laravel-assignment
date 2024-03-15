@extends("layouts.master")
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article List</title>
</head>
<body class="container">
    <h1>Articles List</h1>
    {{-- @dd($products); --}}
    <a class="btn btn-warning" href="{{ route('articles.create')}}">New Article</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Context</th>
                <th scope="col">Excerpt</th>
                <th scope="col">Photo</th>

                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th colspan="2" class="text-center">Action</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach ($articles as $article)
        {{-- @dd($article); --}}
        <tbody>
          <tr>
            <th scope="row">{{ $article-> id }}</th>
            <td>{{ $article-> title }}</td>
            <td>{{ $article-> slug }}</td>
            <td>{{ $article-> context }}</td>
            <td>{{ $article-> excerpt }}</td>
            <td>
                {{-- @dd($article->image); --}}
                <img src="{{asset('uploadedimages/'.$article->image) }}" alt="" width="100px">
            </td>
            <td>{{ $article-> created_at }}</td>
            <td>{{ $article-> updated_at }}</td>
            <td><a class="btn btn-info" href="{{route('articles.edit', $article->id)}}">Edit</a></td>
            <td>
                <form action="{{route('articles.destroy', $article->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" value="submit">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
</body>
</html>
@endsection
