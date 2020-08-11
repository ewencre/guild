@extends('layouts.app')

@section('content')

<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')


    <div class="row">
        <!-- Ajouter Personnage -->
        <div class="form-group">
            <div class="col-sm-12">
                <a class="btn btn-default" href="{{ route('personnages.create') }}">
                    <i class="fa fa-plus"></i> Ajouter personnage
                </a>
            </div>
        </div>
    </div>

    <p>&nbsp;</p>

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
                    <th>Pseudo</th>
                    <th>Race</th>
                    <th>Points de vie</th>
                    <th>Classe</th>
                    <th>Armure</th>
                    <th>Propriétaire</th>
                    <th style="text-align:center">Actions</th>
                </thead>

                <!-- Table Body -->
                <tbody>
                    @foreach ($personnages as $personnage)

                    @if ($personnage->classe->id == 1)
                    @php $couleur = 'burlywood' @endphp
                    @elseif ($personnage->classe->id == 2)
                    @php $couleur = 'cornflowerblue' @endphp
                    @elseif ($personnage->classe->id == 3)
                    @php $couleur = 'white' @endphp
                    @elseif ($personnage->classe->id == 4)
                    @php $couleur = 'lightgreen' @endphp
                    @endif
                    <tr>
                        <!-- Personnage Pseudo -->
                        <td class="table-text">
                            <div>{{ $personnage->pseudo }}</div>
                        </td>
                        <!-- Personnage Race -->
                        <td class="table-text" style="background-color:{{ $couleur }}">
                            <div>{{ $personnage->race->nom }}</div>
                        </td>
                        <!-- Personnage PDV -->
                        <td class="table-text" style="background-color:{{ $couleur }}">
                            <div>{{ $personnage->pdv }}</div>
                        </td>
                        <!-- Personnage Classe -->
                        <td class="table-text" style="background-color:{{ $couleur }}">
                            <div>{{ $personnage->classe->nom }}</div>
                        </td>
                        <!-- Personnage Armure -->
                        <td class="table-text" style="background-color:{{ $couleur }}">
                            <div>{{ $personnage->armure->nom }}</div>
                        </td>
                        <!-- Personnage Propriétaire -->
                        <td class="table-text" style="background-color:{{ $couleur }}">
                            <div>{{ $personnage->proprietaire }}</div>
                        </td>

                        <!-- Delete Button -->
                        <td style="text-align:center">
                            <form action="{{ route('personnages.destroy',$personnage->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('personnages.edit',$personnage->id) }}"><i class="fa fa-btn fa-edit"></i>Modifier</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-btn fa-trash"></i>Supprimer
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