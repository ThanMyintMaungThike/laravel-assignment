@extends('layouts.app')
@section("content")
<form class='container' action="{{route('products.store')}}" method="POST">
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
    <div class="form-group">
        <label for="">Name</label>
        <input class="form-control" type="text" name='name'>
        {{-- @if($errors->first('name'))
        <span class="form-text text-muted" style="color: red;">{{$errors->first('name')}}</span>
        @endif --}}
    </div>
    <div class="form-group mb-3">
        <label for="">Description</label>
        <input class="form-control" type="text" name="description" id="">
        {{-- @if($errors->first('description'))
        <span class="form-text text-muted" style="color: red;">{{$errors->first('description')}}</span>
        @endif --}}
    </div>
    <div class="form-group mb-3">
        <label for="">Status</label>
        <select class="form-control" name="status" id="">
            <option value="1">true</option>
            <option value="0">false</option>
        </select>
        {{-- @if($errors->first('status'))
        <span class="alert alert-danger">{{$errors->first('status')}}</span>
        @endif --}}
    </div>
    <div class="form-group mb-3">
        <label for="">Price</label>
        <input class="form-control" type="text" name='price'>
        {{-- @if($errors->first('price'))
        <span class="form-text text-muted" style="color: red;">{{$errors->first('price')}}</span>
        @endif --}}
    </div>
    <button class="btn btn-primary" value="submit">Submit</button>
</form>
@endsection
