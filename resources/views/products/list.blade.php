@extends('layouts.main')

@section('content')
    <table class="table">
        <caption>List of Products</caption>

        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th class="text-right">Price</th>
                <th class="text-right">Qty.</th>
                <th>-</th>
            </tr>
        </thead>

        <tbody>
            @if (count($products) !== 0)
                @foreach ($products as $product)
                    <tr class="{{ ($product->product_isactive) ? 'success' : 'danger' }}">
                        <td><a class="btn btn-default" href="product/{{ $product->product_id }}/edit" role="button">{{ $product->product_id }}</a></td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->product_description }}</td>
                        <td><p class="text-right">${{ $product->product_price }}</p></td>
                        <td><p class="text-right">{{ $product->product_quantity }}</p></td>
                        <td>
                            {!! Form::open(['route' => ['product.destroy', $product->product_id], 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-danger">DELETE</button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td><p>No products found</p></td>
                </tr>
        @endif
        </tbody>
    </table>
@stop