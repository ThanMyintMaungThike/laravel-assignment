
    <form class="container"  action="{{route('articles.store')}}" method="POST">
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
            <label for="">Title</label>
            <input class="form-control" type="text" name='title'>
        </div>
        <div class="form-group mb-3">
            <label for="">Slug</label>
            <input class="form-control" type="text" name='slug'>
        </div>
        <div class="form-group mb-3">
            <label for="">Context</label>
            <input class="form-control" type="text" name='context'>
        </div>
        <div class="form-group mb-3">
            <label for="">excerpt</label>
            <input class="form-control" type="text" name='excerpt'>
        </div>
        <button value="submit" class="btn btn-primary">Submit</button>
    </form>


