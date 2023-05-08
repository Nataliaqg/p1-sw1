@extends('main-dashboard')
@section('sidebar_content')
    @livewire('purchase.purchase-index')
@endsection
@section('css')
    @livewireStyles
@stop
@section('js')
    @livewireScripts
@stop
 