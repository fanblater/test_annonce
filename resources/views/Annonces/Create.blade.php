@extends('Layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter une annonce</h2>
        </div>
        <div class="pull-right">
            <a class="btn immo-color" href="{{ route('annonces.index') }}" title="index"> <i
                    class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <strong>oops!</strong> Veuillez suivre les instructions.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('annonces.store') }}" method="POST">
    @csrf
    <input type="hidden" name="_token" value="{{ csrf_token()}}">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="ref_annonce">Reférence de l'annonce :</label>
                <input type="text" id="ref_annonce" name="ref_annonce"
                    class="form-control @error('ref_annonce') is-invalid @enderror" placeholder="15254G">
                @error('ref_annonce')
                <div class="alert alert-danger">
                    {{ $errors->first('ref_annonce')}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="prix" class="form-label">Prix :</label>
                <input class="form-control @error('prix') is-invalid @enderror" id="prix" name="prix"
                    placeholder="25.01">
                @error('prix')
                <div class="alert alert-danger">
                    {{ $errors->first('prix')}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="surface" class="form-label">Surface :</label>
                <input type="text" name="surface" id="surface"
                    class="form-control @error('surface') is-invalid @enderror" placeholder="120">
                @error('surface')
                <div class="alert alert-danger">
                    {{ $errors->first('surface')}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="nb_piece" class="form-label">Nombre de pièces :</label>
                <input type="text" id="nb_piece" name="nb_piece"
                    class="form-control @error('nb_piece') is-invalid @enderror" placeholder="Nombre de pièces">
                @error('nb_piece')
                <div class="alert alert-danger">
                    {{ $errors->first('nb_piece')}}
                </div>
                @enderror
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </div>

</form>
@endsection
