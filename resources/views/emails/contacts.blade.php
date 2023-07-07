{{--<x-mail::message>--}}
{{--    <h1>Contacts</h1>--}}

{{--    <h3>Nume: {{ $name }}</h3>--}}
{{--    <h3>Email: {{ $email }}</h3>--}}
{{--    <h3>Telefon: {{ $phone }}</h3>--}}
{{--    <h3>Mesaj: {{ $mess }}</h3>--}}
{{--    {{ config('app.name') }}--}}
{{--</x-mail::message>--}}

@component('mail::message')
# Contacts

<h3>Nume: {{ $name }}</h3>
<h3>Email: {{ $email }}</h3>
<h3>Telefon: {{ $phone }}</h3>
<h3>Mesaj: {{ $mess }}</h3>

@endcomponent
