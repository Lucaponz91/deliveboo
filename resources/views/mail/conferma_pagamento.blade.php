@component('mail::message')
    # Stile di Laravel per le Email

    Pagamento Effettuato




    @php
        // array_filter(array $array, ?callable $callback = null, int $mode = 0): array
        $af = array_filter(
            $order->all()[0],
            function ($e) {
                // if (!strpos($e, '-')) {
                //     $s = explode('-', $e);
                //     return $s[1] == 'counter';
                // }
                return $e != 'resId' && strpos($e, '-');
            },
            ARRAY_FILTER_USE_KEY,
        );
        
        //explode(string $separator, string $string, int $limit = PHP_INT_MAX): array
        
    @endphp
    Riepilogo Ordini:
    @foreach ($af as $key => $item)
        {{ $key }}
        {{ $item }}
    @endforeach

    <h2>Totale Spesa{{ $order->all()[2] }}</h2>

    Dati per la consegna:
    @foreach ($order->all()[1] as $key => $item)
        {{ $key }}
        {{ $item }}
    @endforeach


    Nuovo Ordine Pagato<br>
    {{ config('app.name') }}
@endcomponent
