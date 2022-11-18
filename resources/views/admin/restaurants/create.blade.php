@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>CREA UN RISTORANTE</h1>

        <form action="{{ route('admin.restaurants.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="restaurant_address">Indirizzo</label>
                <input type="text" name="restaurant_address" id="restaurant_address" value="{{ old('restaurant_address') }}">
                @error('restaurant_address')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="p_iva">Partita iva</label>
                <input type="text" name="p_iva" id="p_iva" value="{{ old('p_iva') }}">
                @error('p_iva')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="restaurant_description">descivi il tuo</label>
                <input type="text" name="restaurant_description" id="restaurant_description"
                    value="{{ old('restaurant_description') }}">
                @error('restaurant_description')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="restaurant_phone_number">numero</label>
                <input type="text" name="restaurant_phone_number" id="restaurant_phone_number"
                    value="{{ old('restaurant_phone_number') }}">
                @error('restaurant_phone_number')
                    <p style="color: red;">{{ $message }}</p>
                @enderror
            </div>

            <div>
                @foreach ($typologies as $t)
                    <div style="display: inline-block;">
                        <label for="t-{{ $t->id }}">{{ $t->name }}</label>

                        <input type="checkbox" name="typologies[]" id="t-{{ $t->id }}"
                            @if (in_Array($t->id, old('typologies', []))) checked @endif value="{{ $t->id }}">
                    </div>
                @endforeach
            </div>
            <div class="form-group">
                <label for="restaurant_image" aria-describedby="inputGroupFileAddon02">
                    Scegli la del tuo Ristorante
                </label>
                <div>
                    <img id="blah" alt="your image" height="300" />
                </div>
                <input class="form-control-file" type="file" id="restaurant_image" name="restaurant_image"
                    value="{{ old('restaurant_image') }}"
                    onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                {{-- <img id="blah"  /> ADAMO PRENDI CODICE ANTEPRIMA IMMAGINE --}}
            </div>

            <input type="submit" value="Crea il tuo ristorante">
        </form>
    </div>
@endsection
