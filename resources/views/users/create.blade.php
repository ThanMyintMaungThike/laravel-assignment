@extends("layouts.app")
@section('content')
    <form class="container"  action="{{route('users.store')}}"
    method="POST" enctype="multipart/form-data">
        @csrf
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <div class="form-group mb-3">
            <label for="">Name</label>
            <input class="form-control" type="text" name='name'>
        </div>
        <div class="form-group mb-3">
            <label for="">Email</label>
            <input class="form-control" type="text" name='email'>
        </div>
        <div class="form-group mb-3">
            <label for="">Password</label>
            <input class="form-control" type="text" name='password'>
        </div>

        <button value="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

