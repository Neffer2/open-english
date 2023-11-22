@extends('layouts.app') 
    @section('content')
        @livewire('dash', ['pais' => $pais])
    @endsection