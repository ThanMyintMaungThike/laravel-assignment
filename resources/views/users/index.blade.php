@extends("layouts.master")
@section('content')
    <h1>Users</h1>
    {{-- @dd($products); --}}
    <a class="btn btn-warning" href="{{ route('users.create')}}">New User</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>

                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>

            </tr>
        </thead>
        @foreach ($users as $user)
        {{-- @dd($article); --}}
        <tbody>
          <tr>
            <th scope="row">{{ $user-> id }}</th>
            <td>{{ $user-> name }}</td>
            <td>{{ $user-> email }}</td>

            <td>{{ $user-> created_at }}</td>
            <td>{{ $user-> updated_at }}</td>
            <td><a class="btn btn-info" href="{{route('users.edit', $user->id)}}">Edit</a></td>
            <td>
                <form action="{{route('users.destroy', $user->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" value="submit">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
        @endforeach
    </table>
@endsection
