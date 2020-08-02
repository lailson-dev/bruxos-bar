@extends('templates.layout')
@section('content')
	@foreach($products as $product)
		{{ $product->title }}
	@endforeach
@endsection