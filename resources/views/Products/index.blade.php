@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>All Products</h1>
            <div class="text-center">
                <a type="button" class="btn btn-primary my-3" href="{{ route('products.create') }}">Add New Product</a>
            </div>
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
              <table class="table table-bordered table-striped table-primary text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $key => $product)
                    <tr>
                        <th>{{ $key +1 }}</th>
                        <th>{{ $product->prod_name }}</th>
                        <th><a href="{{ route('products.edit', $product->id) }}"  class="btn btn-sm btn-warning">Edit</a></th>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <th>
                                <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                            </th>
                        </form>
                            <th>{{ $product->category->cat_name }}</th>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
@endsection
