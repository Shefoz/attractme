@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="list-group">
                <a href="{{ route('categories.index')}}" class="list-group-item list-group-item-action text-center">Categories</a>
                <a href="{{ route('products.index')}}" class="list-group-item list-group-item-action text-center">Products</a>
              </div>
        </div>
    </div>
</div>
@endsection
