
@extends('layouts.app')
@section("content")
<form class="container" action="{{route('products.update', $product->id)}}" method="POST">
    @csrf
    {{-- @dd($product); --}}
    <div class="form-group mb-3">
        <label for="">Name</label>
        <input class="form-control" type="text" name='name' value="{{$product->name}}">
    </div>
    <div class="form-group mb-3">
        <label for="">Description</label>
        <input class="form-control" type="text" name='description' value="{{$product->description}}">
    </div>
    <div class="form-group mb-3">
        <label for="">Status</label>
        <select class="form-control" name="status" id="">
            <option value="1" @if($product->status == 1 )selected @endif>true</option>
            <option value="0" @if($product->status == 0 )selected @endif>false</option>
        </select>
    </div>
    <div class="form-group mb-3">
        <label  for="">Price</label>
        <input class="form-control" type="text" name='price' value={{$product->price}}>
    </div>
    <button class="btn btn-primary" value="submit">Submit</button>
</form>
@endsection
