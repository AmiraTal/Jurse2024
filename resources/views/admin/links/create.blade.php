@extends('layouts.app')

@section('title', 'Ajouter un Lien')

@section('content_header')
    <h1>Ajouter un Lien</h1>
@stop

@section('content')
    <form action="{{ route('admin.links.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="href">URL du Lien :</label>
            <input type="text" class="form-control" id="href" name="href" required>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
