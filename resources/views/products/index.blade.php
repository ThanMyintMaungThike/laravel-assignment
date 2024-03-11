@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body class="container">
    <h1>Product List</h1>
    {{-- @dd($products); --}}
    <a class="btn btn-warning" href="{{ route('products.create')}}">New Product</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Status</th>
                <th scope="col">Price</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th class="text-center" colspan="2">Action</th>
                <th scope="col"></th>
            </tr>
        </thead>
        @foreach ($products as $product)
        <tbody>
          <tr>
            <th scope="row">{{ $product-> id }}</th>
            <td>{{ $product-> name }}</td>
            <td>{{ $product-> description }}</td>
            <td>{{ $product-> status }}</td>
            <td>{{ $product-> price }}</td>
            <td>{{ $product-> created_at }}</td>
            <td>{{ $product-> updated_at }}</td>
            <td><a class="btn btn-info" href="{{route('products.edit', $product->id)}}">Edit</a></td>
            <td>
                <form action="{{route('products.delete', $product->id)}}" method="POST">
                    @csrf
                    <button class="btn btn-primary" value="submit">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
        @endforeach
      </table>
</body>
</html>
@endsection
