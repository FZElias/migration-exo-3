@extends('templates.structure')

@section('content')
    <div class="titre my-5 text-center">
        <h1>Elèves</h1>
    </div>

    <table class="table container my-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Etat</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($eleves as $e)
                <tr>
                    <th scope="row">{{ $e->id }}</th>
                    <td>{{ $e->nom }}</td>
                    <td>{{ $e->prenom }}</td>
                    <td>{{ $e->age }}</td>
                    @if ($e->age > 18 && $e->age < 25 && $e->etat === "Demandeur d'emploi")
                        <td>Dans les conditions</td>
                    @else
                        <td>Hors conditions ch</td>
                    @endif
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
