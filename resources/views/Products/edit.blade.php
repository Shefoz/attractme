@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-center"><h3>Edit Product</h3></div>
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
                    <form action="{{ route('products.update', $product->id) }}" method="post">
                        @csrf
                        @method('put')
                        <input type="text" class="form-control" value="{{ $product->prod_name }}" name="prod_name" placeholder="Product Name">
                        <button type="submit" class=" my-3 form-control w-50 btn btn-success">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
