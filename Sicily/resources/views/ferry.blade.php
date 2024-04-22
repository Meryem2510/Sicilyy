@extends('template')
@section('titre')
Les Ferries
@endsection
@section('contenu')
<center>
<div class="container mt-4">
    <h1 style="color:#9400D3">Ferries</h1>
<br>

<a  style="color:#483D8B" href="{{ route('ferry.create') }}" >Ajouter un ferry</a>
<br>
<br>
<table class="table">
    <thead class="table-info">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
    @foreach($ferries as $ferry)
    <tr>
        <td>{{$ferry->nom}} </td>
        <td><a class="btn btn-primary" href="{{route('ferry.show', $ferry->id)}}">Voir</a></td>
        <td>
            <form action="{{route('ferry.destroy', $ferry->id)}}" method="post">
                @csrf
                @method ('delete')
                <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

</center>

<div class="row justify-content-end mt-3">
        <div class="col-auto">
            <a href="{{route('pdf')}}" class="btn btn-success">Générer un PDF</a>
        </div>
@endsection