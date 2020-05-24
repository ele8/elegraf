@component('mail::message')
# Un nuovo Cliente ci ha contatto!

Ecco i suoi dati
<span class="br">Nome: {{$details['nome']}}</span>
<span class="br">Email: {{$details['email']}}</span>



Ciao,<br>
{{ config('app.name') }}
@endcomponent
