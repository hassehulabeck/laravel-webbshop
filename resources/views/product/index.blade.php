@extends ('main')
@section('main')
@parent
@foreach($products as $product)
<p>
    <a href="/products/{{ $product->id }}">{{ $product->name }}</a> {{ $product->price }} </p>
@endforeach
@endsection