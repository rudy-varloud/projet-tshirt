@extends('layouts.master')

@section('Titre ', 'Projet Template')

@section('entete')
    @parent

    <p>Cette partie sera ajoutée à master.</p>
@endsection

@section('content')
<h2>{{$nom}}</h2>    
<p>Voici la partie Body.</p>
<h2>Traitement conditionnel </h2>
@if ($jour == 'Jeudi')
    <p>Jour de la sortie nocturne  Fêtes du jeudi soir à Lyon</p>
@else
    <p>Il est temps d'économiser de l'argent</p>
@endif

@endsection

