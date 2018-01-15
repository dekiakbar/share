@component('mail::message')
# 
Pengirim : {{ $kontak['nama'] }} <{{ $kontak['email'] }}>	

{{ $kontak['pesan'] }}

Terima Kasih<br>
{{ config('app.name') }}
@endcomponent
