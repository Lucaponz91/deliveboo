@component('mail::message')
# Stile di Laravel per le Email
 
Pagamento Effettuato
 
{{-- @component('mail::button', ['url' => route('admin.posts.show',$post)])
{{$post->title}}
@endcomponent --}}
 
{{$order->spesaTotale}}



Nuovo Ordine Pagato<br>
{{ config('app.name') }}
@endcomponent
