@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>students</h1>
                <table>
                    <tr>
                        <th>Student id</th>
                    </tr>
                    <tr>
                        <td>{{ $student->id }}</td>
                    </tr>
                </table>
                <form action="{{route('students.update', $student->id)}}" method="post">
                    {{ csrf_field() }}
                    @method('PATCH')
                    <input type="text" name="roepnaam" value="{{ $student->roepnaam }}" placeholder="Roepnaam">
                    <input type="text" name="voorvoegsel" value="{{ $student->voorvoegsel }}" placeholder="Voorvoegsel">
                    <input type="text" name="achternaam" value="{{ $student->achternaam }}" placeholder="Achternaam">
                    <input type="text" name="voorletters" value="{{ $student->voorletters }}" placeholder="Voorletters">
                    <input type="text" name="officielenaam" value="{{ $student->officielenaam }}" placeholder="Oficiële naam">
                    <input type="text" name="postcode" value="{{ $student->postcode }}" placeholder="Postcode">
                    <input type="text" name="straat" value="{{ $student->straat }}" placeholder="Straat">
                    <input type="text" name="huisnummer" value="{{ $student->huisnummer }}" placeholder="Huisnummer">
                    <input type="text" name="toevoeging" value="{{ $student->toevoeging }}" placeholder="Toevoeging">
                    <input type="text" name="woonplaats" value="{{ $student->woonplaats }}" placeholder="Woonplaats">
                    <input type="text" name="opleiding" value="{{ $student->opleiding }}" placeholder="Opleiding">
                    <input type="text" name="klas" value="{{ $student->klas }}" placeholder="Klas">
                    <input type="submit" value="Update student">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
