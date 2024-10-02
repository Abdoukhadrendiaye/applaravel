
@extends('layout.app')
@section('content')

            <div class="row">
                <div class="col-6">
                    <div class="card m-5">
                    <h5 class="card-header text-center">BIENVENUE!</h5>
                   <div class="card-body">
                    <h5 class="card-title text-center">Enregistrement des categories</h5>
                   <form method="post" action="{{route('categorie.store')}}">
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nom">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
                    </div>
                
                    <button type="submit" class="btn btn-primary ">Enregistrer</button>
                     <a href="{{route('categorie.index')}}" class="btn btn-success ">Retoure</a>

                    </form>
                </div>
                </div>
              </div>
            </div>

@endsection