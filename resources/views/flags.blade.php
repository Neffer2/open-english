@extends('layouts.app')
    @section('content')
        <div class="row"> 
            <div class="col-md-8 dash-left">  
                <div class="row p-4 pb-0">
                    @foreach ($flags as $flag)
                        <div class="flag col-md-4 mb-4 d-flex flex-column align-items-center">
                            <a href="{{ route('dashboard', $flag) }}">
                                <img class="" src='{{ asset("assets/dash/flags/{$flag}.png") }}' alt="Bandera de {{ $flag }}">
                            </a>
                                <label class="flag-label">{{ $flag }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-4 bg-blue dash-right"></div>
        </div> 
    @endsection 