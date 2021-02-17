@extends('Layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter une annonce</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('annonces.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
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
                <strong>Reférence de l'annonce :</strong>
                <input type="text" name="ref_annonce" class="form-control" placeholder="Référence">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Prix :</strong>
                <textarea class="form-control" style="height:50px" name="prix"
                    placeholder="prix"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Surface :</strong>
                <input type="text" name="surface" class="form-control" placeholder="Surface">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre de pièces :</strong>
                <input type="number" name="nb_piece" class="form-control" placeholder="Nombre de pièces">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
