@extends('products.layout')

@section('content')
    <h1 class="bg-dark text-light text-center py-2 text-uppercase">
        Product details
    </h1>
    <div class="container">
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Product Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->detail }}</td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('products.index') }}" class="btn btn-outline-primary">Back to list</a>
    </div>
@endsection
