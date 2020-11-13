@extends('templates.structure')

@section('content')
    <div class="titre my-5 text-center">
        <h1>Formations</h1>
    </div>

    <table class="table container my-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($formations as $e)
                <tr>
                    <th scope="row">{{ $e->id }}</th>
                    <td>{{ $e->nom }}</td>
                    <td>{{ $e->description }}</td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
