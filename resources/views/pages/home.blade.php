@extends('layouts.app')

@section('content')
<img src="{{ asset('images/drapeau-Togo.jpg') }}" alt="Quebec Flag" class="mt-8 rounded shadow-md h-32">

<h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-600">
    Hello from Lomé - TOGO !
</h1>

<p class="text-lg text-gray-800">It's currently {{ date('h:i A') }}.</p>
@endsection