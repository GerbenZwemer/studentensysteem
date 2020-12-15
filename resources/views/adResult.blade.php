@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form action="{{route('resultaten.store')}}" method="POST">
                @csrf
                    <select name='vak_id'>
                        @foreach($vakken as $vak)
                            <option name="{{$vak->vak_naam}}" value="{{$vak->id}}">{{$vak->vak_naam}}</option>
                        @endforeach
                        <input type="text" name="resultaat">
                    </select>
                    <input type="hidden" name="student_id" value="{{$student_id}}">
                    <input type="submit" value="resultaat toevoegen">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
