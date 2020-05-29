@extends ('main')
@section ('main')
@parent

<form action="/products/{{ $product->id }}" method="post">
    @csrf
    @method('PUT')

    <label for="productname">Produktens namn</label>
    <input type="text" name="productname" value="{{ $product->name }}">
    <label for="productprice">Pris</label>
    <input type="text" name="productprice" value="{{ $product->price }}">

    <input type="submit" value="Uppdatera produkt" name="updateproduct">


</form>


@endsection