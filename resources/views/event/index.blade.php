@extends('main-dashboard')
@section('sidebar_content')
    @livewire('event.index-lw')
@endsection
@section('css')
    @livewireStyles
@stop
@section('js')
    @livewireScripts
@stop
 