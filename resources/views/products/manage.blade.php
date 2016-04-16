@extends('layouts.main')

@section('content')
	<div class="container">

		@if (count($errors) > 0)
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif

		<div class="col-xs-1"></div> 
		<div class="col-xs-9">
			@if (isset($product))
				{!! Form::model($product, ['route' => 'product.update']) !!}
			@else
				{!! Form::open(['route' => 'product.create']) !!}
			@endif
			
				<div class="form-group">
					{!! Form::label('product_id', 'ID') !!}
					{!! Form::text('product_id', null, ['class' => 'form-control', 'size' => 4]) !!}
				</div>

				<div class="form-group">
					{!! Form::label('product_name', 'Name') !!}
					{!! Form::text('product_name', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('product_description', 'Description') !!}
					{!! Form::textarea('product_description', null, ['class' => 'form-control', 'rows' => 2]) !!}
				</div>

				<div class="form-group">
					{!! Form::label('product_quantity', 'QTY.') !!}
					{!! Form::number('product_quantity', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('product_price', 'Price') !!}
					{!! Form::number('product_price', null, ['class' => 'form-control', 'step' => 0.01]) !!}
				</div
				<div class="form-group">
					{!! Form::submit('Click Me!', ['class' => 'btn btn-success']) !!}	
				</div>						
			{!! Form::close() !!}
		</div>
		<div class="col-xs-2"></div>
	</div>
@stop