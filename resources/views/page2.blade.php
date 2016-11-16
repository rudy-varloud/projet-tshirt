@extends('layouts.master')

@section('Titre ', 'Projet Template')

@section('entete')
    @parent

    <p>Cette partie sera ajoutée à master.</p>
@endsection

@section('content')
<h2>{{$nom}}</h2>    
<p>Voici la partie Body.</p>
@endsection

 
