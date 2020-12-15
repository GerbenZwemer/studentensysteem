@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>students</h1>
                <form action="{{ route('students.store') }}" method="Post">
                    @csrf
                    <input type="text" name="roepnaam" placeholder="Roepnaam">
                    <input type="text" name="voorvoegsel" placeholder="Voorvoegsel">
                    <input type="text" name="achternaam" placeholder="Achternaam">
                    <input type="text" name="officielenaam" placeholder="Officiëlenaam">
                    <input type="text" name="voorletters" placeholder="Voorletters">
                    <input type="text" name="postcode" placeholder="Postcode">
                    <input type="text" name="straat" placeholder="Straat">
                    <input type="text" name="huisnummer" placeholder="Huisnummer">
                    <input type="text" name="toevoeging" placeholder="Toevoeging">
                    <input type="text" name="woonplaats" placeholder="Woonplaats">
                    <input type="text" name="opleiding" placeholder="Opleiding">
                    <input type="text" name="klas" placeholder="Klas">
                    <input type="submit" value="Student toevoegen">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
