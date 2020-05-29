@extends ('main')
@section ('main')
@parent

<form action="/products" method="post">
    @csrf

    <label for="productname">Produktens namn</label>
    <input type="text" name="productname">
    <label for="productprice">Pris</label>
    <input type="text" name="productprice">
    <input type="submit" value="Lägg till produkt" name="submitproduct">
</form>

@endsection