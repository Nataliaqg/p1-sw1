@extends('main-dashboard')
@section('sidebar_content')
    @livewire('event-photographer.request-event-photographer')
@endsection
@section('css')
    @livewireStyles
    <link href="css/styles.css" rel="stylesheet" />
@stop
@section('js')
    @livewireScripts
@stop