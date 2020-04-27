@extends('Layouts.default', ['title'=>'About'])

@section('contenu')

<div class="container">
    <h2>What is {{config('app.name')}}</h2>
    <p>Belle application; le lien est <a href="laracarte.gov.bf" target="_blank">larabelle.com</a></p>

<div class="row">
    <div class="col-md-6">
        <p class="alert alert-warning">
            <strong>Applcation construite pour un but éducatif</strong>
        </p>
    </div>
</div>

<p>Message à afficher pour montrer l'efficacité de la plateforme</p>

<hr>

<h2>What is Laramap</h2>
<p>Un vrai site de pro</p>
<p>Plus d'infos sur : <a href="{{config('app.name')}}.gov.bf">ici</a></p>

<hr>

<h2>Les outils a utilisés</h2>
<p>Basiquement, il faut utiliser :</p>
<ul>
    <li>Un marteau</li>
    <li>Des tournevis</li>
    <li>Une pince</li>
    <li>Un pinceau</li>
    <li>Une tête raséé</li>
</ul>
</div>
@stop