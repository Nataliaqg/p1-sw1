@extends('main-dashboard')
@section('sidebar_content')
    <h1><b>Fotografias del evento:</b></h1>
    @livewire('event-photographer.index')
    
   

    
@endsection
@section('css')
    @livewireStyles
    {{-- <link href="css/styles.css" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href={{ asset('assets/css/photographer/uploadphotos.css') }}> --}}
@stop
@section('js')
    @livewireScripts
@stop