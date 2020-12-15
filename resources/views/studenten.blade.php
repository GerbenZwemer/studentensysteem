@extends('layouts.app')

@section('content')
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>students</h1>
                <a class="btn btn-success btn-sm" href="{{ route('students.create') }}">Create</a>
                <table>
                    <tr>
                        <th>Id</th>
                        <th>Roepnaam</th>
                        <th>Voorvoegsel</th>
                        <th>Achternaam</th>
                        <th>Postcode</th>
                        <th>Straat</th>
                        <th>Huisnummer</th>
                        <th>Toevoeging</th>
                        <th>Woonplaats</th>
                        <th>Opleiding</th>
                        <th>Klas</th>
                        <th>Acties</th>
                    </tr>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->roepnaam }}</td>
                            <td>{{ $student->voorvoegsel }}</td>
                            <td>{{ $student->achternaam }}</td>
                            <td>{{ $student->voorletters }}</td>
                            <td>{{ $student->postcode }}</td>
                            <td>{{ $student->straat }}</td>
                            <td>{{ $student->huisnummer }}</td>
                            <td>{{ $student->toevoeging }}</td>
                            <td>{{ $student->woonplaats }}</td>
                            <td>{{ $student->opleiding }}</td>
                            <td>{{ $student->klas }}</td>
                            <td><a class="btn btn-primary btn-sm" href="{{route('students.edit', $student->id)}}">Edit</a></td>
                            <td>
                                <form action="{{ route('students.destroy', $student->id) }}" method="post" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                                </form>
                            </td>
                            <td><a class="btn btn-secondary btn-sm" href="{{route('students.show', $student->id)}}">Resultaten</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
