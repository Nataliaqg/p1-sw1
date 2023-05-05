@extends('main-dashboard')
@section('sidebar_content')
@livewire('event.show-event',['event_id'=>$event_id])
@endsection
@section('css')
    @livewireStyles
@stop
@section('js')
    @livewireScripts
@stop
 