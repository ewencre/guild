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
                    <th>Armure</th>
                    <th>Détails</th>
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
                        <td @if($personnage->proprietaire == 'Tom' OR $personnage->proprietaire == 'tom') class="table-text tom" @else class="table-text" @endif>
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
                        <!-- Personnage Armure -->
                        <td class="table-text" style="background-color:{{ $couleur }}">
                            <div>{{ $personnage->armure->nom }}</div>
                        </td>
                        <!-- Personnage Détails -->
                        <td class="table-text" style="background-color:{{ $couleur }}">
                            <div>Je suis un {{ $personnage->classe->nom }} avec la spécialisation {{ $personnage->specialisation->nom }}</div>
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

    <div class="row">
        <div class="form-group">
            <div class="col-sm-12">
                <p>
                    <span style="background-color:burlywood">&nbsp;&nbsp;&nbsp;&nbsp;</span> Guerrier
                </p>
                <p>
                    <span style="background-color:cornflowerblue">&nbsp;&nbsp;&nbsp;&nbsp;</span> Mage
                </p>
                <p>
                    <span style="background-color:white">&nbsp;&nbsp;&nbsp;&nbsp;</span> Prêtre
                </p>
                <p>
                    <span style="background-color:lightgreen">&nbsp;&nbsp;&nbsp;&nbsp;</span> Chasseur
                </p>
            </div>
        </div>
    </div>
    @endif
    <script>
function getRandomColor() {
    var letters = '012345'.split('');
    var color = '#';        
    color += letters[Math.round(Math.random() * 5)];
    letters = '0123456789ABCDEF'.split('');
    for (var i = 0; i < 5; i++) {
        color += letters[Math.round(Math.random() * 15)];
    }
    return color;
} 
$(".tom").each(function() {
    var div = $(this); 
    var chars = div.text().split('');
    div.html('');     
    for(var i=0; i<chars.length; i++) {
        var span = $('<span>' + chars[i] + '</span>').css("color", getRandomColor());
        div.append(span);
    }
});
    </script>
    @endsection
