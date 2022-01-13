@extends('products.layout')

@section('content')
    <h1 class="bg-dark text-light text-center py-2 text-uppercase">
        Products List
    </h1>
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row mt-5">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product name</th>
                        <th scope="col">Product Detail</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <th scope="row">{{ $product->id }}</th>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->detail }}</td>
                            <td>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    {{-- <a href="{{ route('products.show'), $product->id }}" class="btn btn-info">Details</a>
                                    <a href="{{ route('products.edit'), $product->id }}" class="btn btn-primary">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button> --}}
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
        <a href="{{ route('products.create') }}" class="btn btn-outline-primary">Add Product</a>
    </div>
@endsection
