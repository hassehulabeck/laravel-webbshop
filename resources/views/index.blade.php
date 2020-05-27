@extends ('main')
@section('main')
@parent
<p>Innehåll från index.blade.php</p>
@endsection

@section('info')

<form action="/input" method="post">
    @csrf
    @method ('PUT')
    <input type="text" name="username">
    <input type="submit" value="Gå till input" name="goToInput">
</form>

@endsection