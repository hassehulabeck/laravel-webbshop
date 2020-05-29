@extends ('main')
@section('main')
@parent
<p> {{ $product->name }} kostar {{ $product->price }} </p>
<form action="/products/{{ $product->id }}/edit" method="get">
    @csrf
    <input type="submit" value="Editera produkten">
</form>

<form action="/products/{{ $product->id }}" method="post">
    @csrf
    @method('DELETE')
    <input type="submit" value="Ta bort denna produkt">

</form>
@endsection