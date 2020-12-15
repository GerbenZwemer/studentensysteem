@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>students</h1>
                <a class="btn btn-success btn-sm" href="{{ route('vakken.create') }}">Create</a>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Vak naam</th>
                    </tr>
                    @foreach ($vakken as $vak)
                        <tr>
                            <td>{{ $vak->id }}</td>
                            <td>{{ $vak->vak_naam }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{route('vakken.edit', $vak->id)}}">Edit</a></td>
                            <td>
                                <form action="{{ route('vakken.destroy', $vak->id) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
