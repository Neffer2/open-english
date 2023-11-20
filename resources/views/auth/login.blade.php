@extends('layouts.auth')
    @section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        @livewire('auth.login')
    </form>
    @endsection
