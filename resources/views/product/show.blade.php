@extends ('main')
@section('main')
@parent
<p> {{ $product->name }} kostar {{ $product->price }} </p>
@endsection