{{-- will extend the main.blade.php, we don't say @include here, we say extends cuz we want to inject the content to main.blade --}}

@extends('layouts.main')

{{-- section name should match what you want to inject to (the name inside yield), in this case @yield('content') in main.blade --}}
@section('content')

{{-- here is when we write html that will be extended --}}
    
@endsection