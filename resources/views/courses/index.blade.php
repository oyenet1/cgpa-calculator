@extends('layouts.vali')
@section('title', 'add courses')

@section('styles')
    {{-- @livewireStyles --}}
@endsection

@section('app-title')
    <div class="app-title pb-5"
        style="background-image: linear-gradient(to right, rgba(20, 255, 100, .7), rgba(20, 255, 100, .3))!important">
        <div>
            <h1><i class="fa fa-dashboard"></i> Add Courses</h1>
            <p>Kindly add courses here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-book fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Courses</a></li>
        </ul>
    </div>
@endsection
@section('content')

    {{-- livewire components --}}
    @livewire('courses')
@endsection

