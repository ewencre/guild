@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Personnage Form -->
    <form action="{{ route('personnages.update',$personnage->id) }}" method="POST" class="form-horizontal">
        @csrf
        @method('PUT')

        <!-- Pseudo Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Pseudo</label>

            <div class="col-sm-6">
                <input type="text" name="pseudo" id="personnage-pseudo" class="form-control" value="{{ $personnage->pseudo }}">
            </div>
        </div>
        
        <!-- PDV Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Points de vie</label>

            <div class="col-sm-6">
                <input type="number" name="pdv" id="personnage-pdv" class="form-control" value="{{ $personnage->pdv }}">
            </div>
        </div>

        <!-- Race Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Race</label>

            <div class="col-sm-6">
                <select name="race_id">
                    @foreach ($races as $race)
                    <option value="{{ $race->id }}" @if ($race->id == $personnage->race->id) selected @endif>{{ $race->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <!-- Classe Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Classe</label>

            <div class="col-sm-6">
                <select name="classe_id">
                    @foreach ($classes as $classe)
                    <option value="{{ $classe->id }}" @if ($classe->id == $personnage->classe->id) selected @endif>{{ $classe->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <!-- specialisation Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Spécialisation</label>

            <div class="col-sm-6">
                <select name="specialisation_id">
                    @foreach ($specialisations as $specialisation)
                    <option value="{{ $specialisation->id }}" @if ($specialisation->id == $personnage->specialisation->id) selected @endif>{{ $specialisation->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <!-- Armure Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Armure</label>

            <div class="col-sm-6">
                <select name="armure_id">
                    @foreach ($armures as $armure)
                    <option value="{{ $armure->id }}" @if ($armure->id == $personnage->armure->id) selected @endif>{{ $armure->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Proprietaire Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Propriétaire</label>

            <div class="col-sm-6">
                <input type="text" name="proprietaire" id="personnage-proprietaire" class="form-control" value="{{ $personnage->proprietaire }}">
            </div>
        </div>

        <!-- Modifier Personnage -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-success">
                    Valider
                </button>
                <a class="btn btn-primary" href="{{ route('personnages.index') }}">
                    Annuler
                </a>
            </div>
        </div>
    </form>
</div>
@endsection