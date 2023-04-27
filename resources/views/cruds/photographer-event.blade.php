<div>
    {{-- @extends('adminlte::page') --}}

    {{-- @section('title', 'Refencia-tipos') --}}

    {{-- @section('content_header') --}}
    <h1><b>Fotografias del evento:</b></h1>
    {{-- @stop --}}

    {{-- @section('content') --}}
    @livewire('photographer-event.index')
    {{-- @stop --}}

    {{-- @section('css') --}}
    @livewireStyles
    {{-- @stop --}}

    {{-- @section('js') --}}
    @livewireScripts
    {{-- @stop --}}

</div>
