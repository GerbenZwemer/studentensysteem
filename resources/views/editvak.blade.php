@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>students</h1>
                <table>
                    <tr>
                        <th>Vak id</th>
                    </tr>
                    <tr>
                        <td>{{ $vak->id }}</td>
                    </tr>
                </table>
                <form action="{{route('vakken.update', $vak->id)}}" method="post">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <input type="text" name="vak_naam" value="{{$vak->vak_naam}}">
                    <input type="hidden" name="vak_id" value="{{$vak->id}}">
                    <input type="submit" value="Update Vak">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
