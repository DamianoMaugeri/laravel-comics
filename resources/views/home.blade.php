@extends('layouts.master')

@php
    // dd(config('comics'))
    $comics= config('comics');

@endphp

@section('contenuto')
<div class="main">
    <h2 class="section-title">CURRENT SERIES</h2>
    <div class="container ">
        <div class="row flex-wrap g-3">
            @foreach ($comics as $comic) 
                <div class="col-2">
                    <x-card>
                        <x-slot name="titolo"> {{$comic['title']}} </x-slot>
                        <x-slot name="img"> {{$comic['thumb']}} </x-slot>
                    </x-card>
                </div>
            
                
            @endforeach
        </div>
    </div>
    <div class="load-btn">LOAD MORE</div>
</div>



@endsection