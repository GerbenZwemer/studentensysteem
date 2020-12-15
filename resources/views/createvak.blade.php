@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>students</h1>
                <form action="{{ route('vakken.store') }}" method="Post">
                    @csrf
                    <input type="text" name="vak_naam" placeholder="Vak naam">
                    <input type="submit" value="Vak toevoegen">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
