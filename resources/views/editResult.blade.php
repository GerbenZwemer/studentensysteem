@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>students</h1>
                <table>
                    <tr>
                        <th>Resultaat id</th>
                    </tr>
                    <tr>
                        <td>{{ $resultaat->id }}</td>
                    </tr>
                </table>
                <form action="{{route('resultaten.update', $resultaat->id)}}" method="post">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <input type="text" name="resultaat" value="{{$resultaat->resultaat}}">
                    <input type="hidden" name="student_id" value="{{$resultaat->student_id}}">
                    <input type="submit" value="Update student">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
