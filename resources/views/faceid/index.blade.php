@extends('main-dashboard')
@section('sidebar_content')
    <h1><b>test faceid:</b></h1>
    @livewire('faceid.test')
@endsection
@section('css')
    @livewireStyles
@stop
@section('js')
    @livewireScripts
@stop