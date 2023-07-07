{{--<x-mail::message>--}}
{{--    <h1>Contacts</h1>--}}

{{--    <h3>Nume: {{ $name }}</h3>--}}
{{--    <h3>Email: {{ $email }}</h3>--}}
{{--    <h3>Telefon: {{ $phone }}</h3>--}}
{{--    <h3>Mesaj: {{ $mess }}</h3>--}}
{{--    {{ config('app.name') }}--}}
{{--</x-mail::message>--}}

@component('mail::message')
# Checkout

<h3>Nume: {{ $name }}</h3>
<h3>Email: {{ $email }}</h3>
<h3>Telefon: {{ $phone }}</h3>
<h3>Oras: {{ $city }}</h3>
<h3>Adresa: {{ $address }}</h3>
<h3>Cod postal: {{ $postal_code }}</h3>
<h3>Data: {{ $date_added }}</h3>


@component('mail::table')
    | NUME PRODUS   | COD           | CANTITATE| PREȚ UNITAR | TOTAL    |
    | :------------- |:-------------| --------:| --------:   | --------:|
    @foreach($products as $product)
    | <a href="{{ $product['url'] }}" >{{ $product['title'] }}</a> | {{ $product['code'] }} | {{ $product['count'] }} | {{ $product['price'] }} MDL | {{ $product['total'] }} MDL |
    @endforeach
    |||||Total: {{ $total }} MDL|
@endcomponent

@endcomponent
