@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @vite('resources/js/app.js')
    @verbatim
    
    <main id="app">
        <br>{{message}}<br>
        El valor es: {{value}}<br><br>
        <button @click="increase">Incrementar</button>
        <button @click="decrease" :disabled="isButtonDisable">Disminuir</button>
    </main>

    @endverbatim
@endsection