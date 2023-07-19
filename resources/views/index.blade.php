@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @vite('resources/js/app.js')
    <main id="app">
        <home-component></home-component>
    </main>
@endsection