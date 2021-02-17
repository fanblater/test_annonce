@extends('Layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> {{ $annonce->ref_annonce }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('annonces.index') }}" title="Go back"> <i
                    class="fas fa-backward "></i> </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Ref:</strong>
            {{ $annonce->ref_annonce }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prix:</strong>
            {{ $annonce->prix }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Surface:</strong>
            {{ $annonce->surface }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nb de pièces:</strong>
            {{ $annonce->nb_piece }}
        </div>
    </div>

</div>
@endsection
