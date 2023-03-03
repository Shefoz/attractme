@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"><h3>Add Product</h3></div>
                <div class="card-body text-center">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{ route('products.store') }}" method="post">
                        @csrf
                        
                        <input type="text" class="form-control my-2" name="prod_name" placeholder="Product Name">
                        <select name="cat_id" class="form-control" id="exampleFormControlSelect1">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class=" my-3 form-control w-50 btn btn-success">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
