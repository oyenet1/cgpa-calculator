@extends('layouts.vali')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
             {{-- error message for roles and permission --}}
             @if (session('error'))
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     <span class="sr-only">Close</span>
                 </button>
                 <strong>Dear {{ Auth::user()->name }},  </strong> {{ session('error') }}
             </div>
         @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" data-toggle="tooltip" data-placement="top" title="Hooray!">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in as normal user!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
