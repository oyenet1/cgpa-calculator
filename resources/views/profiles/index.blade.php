@extends('layouts.vali')
@section('title', Auth::user()->name)
@section('styles')
{{-- stying goes here --}}
@endsection
@section('app-title')
    <div class="app-title pb-5"
        style="background-image: linear-gradient(to right, rgba(20, 255, 100, .7), rgba(20, 255, 100, .3))!important">
        <div>
            <h1><i class="fa fa-dashboard"></i> Update Profile</h1>
            <p>Kindly update your profile here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fas fa-book fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
        </ul>
    </div>
@endsection
@section('content')
<div class="p-5 rounded bg-white container-fluid" style="margin-top: -70px!important">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="max-width: max-content">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
            <strong class="d-flex align-items-center"><i class="fas fa-check-circle mr-sm-2 mr-md-3 fa-2x"></i> <span>{{ session('success') }}</span> </strong>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 d-flex flex-wrap">
            <div>
                <img src="https://www.fillmurray.com/200/200" alt="profile picture" class="">
            </div>
            <div class="ml-3">
                <table class="details">
                    <tr>
                        <td>Name: </td>
                        <td class="values">{{ auth()->user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Matric Number:</td>
                        <td class="values"></td>
                    </tr>
                    <tr>
                        <td>Role:</td>
                        <td class="values"></td>
                    </tr>
                    <tr>
                        <td>Faculty:</td>
                        <td class="values"></td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td class="values"></td>
                    </tr>
                    <tr>
                        <td>Level:</td>
                        <td class="values"></td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
    {{-- <form wire:submit.prevent="submit" class="row justify-conter-between">
        <div class="col-md-4 pr-1">
            <div class="form-group my-1 mx-0">
                <label class="mb-0 p-0" for="code">profile Code</label>
                <input type="text" wire:model="code" id="code" class="form-control" placeholder=""
                    value="{{ old('code') }}">
                @error('code')
                    <small class="text-danger font-weight-bold m-0 p-0">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-md-4 pr-1">
            <div class="form-group my-1 m-0">
                <label class="mb-0 p-0" for="title">profile Title</label>
                <input type="text" wire:model="title" id="" class="form-control" placeholder=""
                    value="{{ old('title') }}">
                @error('title')
                    <small class="text-danger font-weight-bold m-0 p-0">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="col-12 my-2">
            <button type="submit" class="btn mt-1 btn-primary rounded">Add profile</button>
        </div>
    </form> --}}

    {{-- profile table --}}
</div>

<div class="p-5 rounded bg-white container-fluid" style="margin-top: -70px!important">
    <div class="card text-left">
        <div class="card-header d-flex justify-content-between">
            <h3></h3>
        </div>
        <div class="card-body  table-responsive">

        </div>
    </div>
</div>

@endsection
@section('scripts')


@endsection
