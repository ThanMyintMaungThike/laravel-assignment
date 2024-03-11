@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <button class="border-0">
        <a class="btn btn-warning" href="{{route('articles.index')}}">Articles
        </a>
        <a class="btn btn-success" href="{{route('products.home')}}">Products
        </a>
    </button>
</div>
@endsection
