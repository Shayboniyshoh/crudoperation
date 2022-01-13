@extends('products.layout')

@section('content')
    <h1 class="bg-dark text-light text-center py-2 text-uppercase">
        Create Products
    </h1>
    <div class="container">
        <div class="row mt-5">
            <form method="POST" action="{{ route('products.store') }}" class="w-50 m-auto bg-white p-5 rounded">
                @csrf
                <input class="form-control my-2" type="text" name="name" id="product_name" placeholder="Name">
                <textarea class="form-control my-2" type="text" name="detail" id="product_detail"
                    placeholder="Detail"></textarea>
                <button class="btn btn-outline-success text-uppercase my-2" type="submit">Create</button>
            </form>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-outline-dark">Back to list</a>
    </div>
@endsection
