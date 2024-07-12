@component('mail::message')

#Hai un nuovo messaggio di richiesta informazioni


**Nome:** {{ $name }}


**Email:** {{ $email }}


**Messaggio:** 
{{ $message }}

@endcomponent