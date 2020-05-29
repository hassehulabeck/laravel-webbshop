@extends ('main')
@section('main')
@parent
<a href="/products/create">Lägg till produkt</a>
@foreach($products as $product)
<p>
    <a href="/products/{{ $product->id }}">{{ $product->name }}</a> {{ $product->price }} </p>
@endforeach
@endsection