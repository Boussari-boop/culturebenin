@extends('layout')

@section('content')
<div class="row">
    <div class="col-sm-6">
        <h3 class="mb-0">Gestion des contenus</h3>
    </div>
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Contenus</a></li>
            <li class="breadcrumb-item active" aria-current="page">Création</li>
        </ol>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-12">
        <div class="card card-primary card-outline mb-4">
            <form method="POST" action="{{ route('contenus.store') }}">
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label for="titre" class="form-label">Titre</label>
                        <input type="text" class="form-control" name="titre" required maxlength="255" placeholder="Ex: Mon titre" />
                    </div>

                    <div class="mb-3">
                        <label for="texte" class="form-label">Texte</label>
                        <textarea class="form-control" name="texte" rows="5" required placeholder="Écrivez le contenu ici..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="statut" class="form-label">Statut</label>
                        <input type="text" class="form-control" name="statut" placeholder="Ex: actif, inactif" value="actif" />
                    </div>

                    <div class="mb-3">
                        <label for="parent_id" class="form-label">Parent (optionnel)</label>
                        <input type="number" class="form-control" name="parent_id" placeholder="ID du contenu parent" />
                    </div>

                    <div class="mb-3">
                        <label for="date_validation" class="form-label">Date de validation (optionnel)</label>
                        <input type="date" class="form-control" name="date_validation" />
                    </div>

                </div>
                <div class="card-footer" style="display: flex;">
                    <a href="{{ route('contenus.index') }}"><button type="button" class="btn btn-primary">Annuler</button></a>
                    <button type="submit" class="btn btn-success" style="margin-left:750px">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
