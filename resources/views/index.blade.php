@extends ('main')
@section('main')
@parent
@foreach($products as $product)
<p> {{ $product->name}} {{ $product->price }}</p>
@endforeach
@endsection