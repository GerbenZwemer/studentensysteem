@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table>
                <a class="btn btn-success btn-sm" href="{{ route('resultaten.show', $student->id) }}">Create</a>
                    <tr>
                        <th>Resultaat</th>
                        <th>Vak</th>
                        <th>Acties</th>
                    </tr>
                    @foreach($student->resultaten as $resultaat)
                        <tr>
                            <td>{{$resultaat->resultaat}}</td>
                            <td>{{$resultaat->vak->vak_naam}}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{route('resultaten.edit', $resultaat->id )}}">Edit</a></td>
                            <td>
                                <form action="{{route('resultaten.destroy', $resultaat->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
