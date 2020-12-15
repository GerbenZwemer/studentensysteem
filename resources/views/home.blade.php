@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Je bent ingelogd je kunt kiezen uit de volgende acties:') }}
                    <br><a href="{{ route('students.index') }}">Studenten</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
