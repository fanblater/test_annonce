@extends('Layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
        <h2>Annonces 3G IMMO Consultant</h2>
        </div>
        <div class="pull-right">
            <a class="btn immo-color" href="{{ route('annonces.create') }}" title="Créez votre annonce"> <i
                    class="fas fa-plus-circle"></i>
            </a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered table-responsive-lg">
    <tr>
        <th>Ref</th>
        <th>@sortablelink('prix')</th>
        <th>@sortablelink('surface')</th>
        <th>Nb de pièces</th>
        <th width="280px">Action</th>
    </tr>


    @foreach ($annonces as $annonce)
    <tr>
        <td>{{ $annonce->ref_annonce }}</td>
        <td>{{ $annonce->prix }}</td>
        <td>{{ $annonce->surface }}</td>
        <td>{{ $annonce->nb_piece }}</td>
        <td>
            <form action="{{ route('annonces.destroy', $annonce) }}" method="POST">

                <a href="{{ route('annonces.show', $annonce) }}" title="show">
                    <i class="fas fa-eye eye-color fa-lg"></i>
                </a>

                <a href="{{ route('annonces.edit', $annonce) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>

                @csrf
                @method('DELETE')

                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                    <i class="fas fa-trash fa-lg text-danger"></i>

                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>


@endsection
