@extends('layouts.vali')
@section('title', 'calculate cgpa')
@section('app-title')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> CGPA Calculator</h1>
            <p>A free and open source Bootstrap 4 admin template</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">CGPA Calculator</a></li>
        </ul>
    </div>
@endsection

@section('content')
    @livewire('cgpa')
@endsection
