@extends('products.layout')

@section('content')
    <h1 class="bg-dark text-light text-center py-2 text-uppercase">
        Products List
    </h1>
    <div class="container">
        <div class="row mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Product Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-outline-primary">Add Product</a>
    </div>
@endsection
