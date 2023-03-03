@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>All Categories</h1>
            <div class="text-center">
                <a type="button" class="btn btn-primary my-3" href="{{ route('categories.create') }}">Add New Category</a>
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
                        <th>Category Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $key => $category)
                    <tr>
                        <th>{{ $key +1 }}</th>
                        <th>{{ $category->cat_name }}</th>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
        </div>
    </div>
</div>
@endsection
