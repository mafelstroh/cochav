@extends('layouts.main')

@section('content')
<ul>
	@foreach ($products as $product)
	    <p>This is user {{ $product->id }}</p>
	@endforeach
</ul>
@stop