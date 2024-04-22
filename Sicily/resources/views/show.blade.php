@extends('template')
@section('titre')
Ferry {{$ferry->nom}}
@endsection
@section('contenu')
    <div class="row">
        <div class="col-md-6">
            <h1>{{$ferry->nom}}</h1>
            <img src="../photos/{{$ferry->photo}}" class="img-fluid" alt="Photo du ferry">
        </div>
        <div class="col-md-6">
            <table class="table table-bordered" style="background-color: #E0FFFF;">
                <tbody>
                    <tr>
                        <th>Caractéristiques</th>
                        <td>Longueur : {{$ferry->longueur}}</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Largeur : {{$ferry->largeur}}</td>
                    </tr>
                    <tr>
                        <th></th>
                        <td>Vitesse : {{$ferry->vitesse}}</td>
                    </tr>
                    <tr>
                        <th>Liste des équipements</th>
                        <td>
                            <ul>
                                @foreach($ferry->equipements as $equipement)
                                <li>{{$equipement->libelle}}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center mt-4">
    <a class="btn btn-info" href="{{url()->previous()}}"> Retour</a>
</div>
@endsection
