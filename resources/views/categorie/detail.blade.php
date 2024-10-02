@extends('layout.app');
@section('content'):

<div class="card m-5" style="width: 30rem;">
    <h1 class="text-center">Bienvenue dans detail!</h1>
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$categorie->nom}} </h5>
    <p class="card-text">{{$categorie->description}}</p>
    <p class="card-text">{{$categorie->created_at}}</p>
    <a href="{{route('categorie.index')}}" class="btn btn-primary">retoure</a>
  </div>
</div>
