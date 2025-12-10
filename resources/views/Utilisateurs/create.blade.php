@extends('layout')


@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Gestion des utilisateurs</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Utilisateurs</a></li>
                <li class="breadcrumb-item active" aria-current="page">Création</li>
            </ol>
        </div>
    </div>
    <div class="row g-4">
        <!--begin::Col-->

        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-12">
            <!--begin::Quick Example-->
            <div class="card card-primary card-outline mb-4">
                <!--begin::Header-->

                <!--end::Header-->
                <!--begin::Form-->
                <form method="POST" action="{{ route('utilisateurs.store') }}">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" name="nom"  required maxlength="100"/>
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" class="form-control" name="prenom" required maxlength="100"
                                placeholder="Ex: Murelle" />

                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required maxlength="100"
                                placeholder="Ex: exemple@email.com" />
                        </div>

                        <div class="mb-3">
                            <label for="mot_de_passe" class="form-label">Mot de passe</label>
                            <input type="password" class="form-control" name="mot_de_passe" required maxlength="100"
                                placeholder="Entrez votre mot de passe" />
                        </div>

                        <div class="mb-3">
                            <label for="sexe" class="form-label">Sexe</label>
                            <input type="text" class="form-control" name="sexe"
                                placeholder="Ex: Homme, Femme, Autre" />
                        </div>

                        <div class="mb-3">
                            <label for="date_naissance" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" name="date_naissance" required />
                        </div>
                        <div class="mb-3">
                            <label for="date_inscription" class="form-label">Date d'inscription</label>
                            <input type="date" class="form-control" name="date_inscription" required />

                        </div>
                        <div class="mb-3">
                            <label for="statut" class="form-label">Statut</label>
                            <input type="text" class="form-control" name="statut"
                                placeholder="Ex: actif, inactif, suspendu" value="actif" />
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo (optionnel)</label>
                        <input type="file" class="form-control" name="photo" accept="image/*" />
                    </div>
            </div>
        </div>

        <!--end::Body-->
        <!--begin::Footer-->
        <div class="card-footer" style="display: flex;">
            <a href="{{ route('utilisateurs.index') }}"><button class="btn btn-primary">Annuler</button></a>
            <button type="submit" class="btn btn-success" style="margin-left:750px">Enregistrer</button>
        </div>
        <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div>
    <!--end::Quick Example-->
    <!--begin::Input Group-->

    <!--end::JavaScript-->

    <!--end::Form Validation-->
    </div>
    <!--end::Col-->
    </div>
@endsection
