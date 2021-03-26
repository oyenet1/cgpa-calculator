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
                <strong class="d-flex align-items-center"><i class="fas fa-check-circle mr-sm-2 mr-md-3 fa-2x"></i>
                    <span>{{ session('success') }}</span> </strong>
            </div>
        @endif

        <div class="row">
            <div class="d-flex flex-row rounded p-2 bg-gray flex-grow-1 align-items-center">
                <div style="background-image: url(''); background-size: 100% 100%; background-repeat: no-repeat;" class="">
                    <img src="https://www.fillmurray.com/300/300" alt="profile picture"
                        class=" mx-auto d-block h-auto img-thumbnail" style="width: 90%">
                </div>
                <div class="ml-3 table-responsive">
                    <table class="details d-flex flex-column justify-content-between">
                        <tr>
                            <td>Name: </td>
                            <td class="values ml-2 ml-md-3 ml-lg-4">{{ auth()->user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Matric Number:</td>
                            <td class="values ml-2 ml-md-3 ml-lg-4"></td>
                        </tr>
                        <tr>
                            <td>Role:</td>
                            <td class="values ml-2 ml-md-3 ml-lg-4"></td>
                        </tr>
                        <tr>
                            <td>Faculty:</td>
                            <td class="values ml-2 ml-md-3 ml-lg-4"></td>
                        </tr>
                        <tr>
                            <td>Department:</td>
                            <td class="values ml-2 ml-md-3 ml-lg-4"></td>
                        </tr>
                        <tr>
                            <td>Level:</td>
                            <td class="values ml-2 ml-md-3 ml-lg-4"></td>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>


        {{-- profile table --}}
    </div>

    @livewire('profile', ['user' => $user], key($user->name))

@endsection
@section('scripts')


@endsection
