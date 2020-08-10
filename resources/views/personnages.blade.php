@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
    <form action="/personnage" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- Pseudo Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Pseudo</label>

            <div class="col-sm-6">
                <input type="text" name="pseudo" id="personnage-pseudo" class="form-control">
            </div>
        </div>

        <!-- Race Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Race</label>

            <div class="col-sm-6">
                <select name="race_id">
                    @foreach ($races as $race)
                    <option value="{{ $race->id }}">{{ $race->nom }}</option>
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
                    <option value="{{ $classe->id }}">{{ $classe->nom }}</option>
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
                    <option value="{{ $armure->id }}">{{ $armure->nom }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Proprietaire Personnage -->
        <div class="form-group">
            <label for="personnage" class="col-sm-3 control-label">Propriétaire</label>

            <div class="col-sm-6">
                <input type="text" name="proprietaire" id="personnage-proprietaire" class="form-control">
            </div>
        </div>

        <!-- Ajouter Personnage -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Ajouter personnage
                </button>
            </div>
        </div>
    </form>
</div>

<!-- Current Tasks -->
@if (count($personnages) > 0)
<div class="panel panel-default">
    <div class="panel-heading">
        Les Personnages
    </div>

    <div class="panel-body">
        <table class="table table-striped task-table">

            <!-- Table Headings -->
            <thead>
                <th>&nbsp;</th>
                <th>Pseudo</th>
                <th>Race</th>
                <th>Classe</th>
                <th>Armure</th>
                <th>Propriétaire</th>
                <th>&nbsp;</th>
            </thead>

            <!-- Table Body -->
            <tbody>
                @foreach ($personnages as $personnage)
                <tr>
                    <!-- Personnage id -->
                    <td class="table-text">
                        <div>{{ $personnage->id }}</div>
                    </td>
                    <!-- Personnage Pseudo -->
                    <td class="table-text">
                        <div>{{ $personnage->pseudo }}</div>
                    </td>
                    <!-- Personnage Race -->
                    <td class="table-text">
                        <div>{{ $personnage->race->nom }}</div>
                    </td>
                    <!-- Personnage Classe -->
                    <td class="table-text">
                        <div>{{ $personnage->classe->nom }}</div>
                    </td>
                    <!-- Personnage Armure -->
                    <td class="table-text">
                        <div>{{ $personnage->armure->nom }}</div>
                    </td>
                    <!-- Personnage Propriétaire -->
                    <td class="table-text">
                        <div>{{ $personnage->proprietaire }}</div>
                    </td>

                    <!-- Delete Button -->
                    <td>
                        <form action="{{ url('personnage/'.$personnage->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-btn fa-trash"></i>Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection