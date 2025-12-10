@extends('layout')

@section('content')
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="card mb-4">
                    
                    <div class="card-header mb-3">
                        <h3 class="card-title">Gestion Utilisateurs</h3>
                        <div class="text-end justify-content-end">
                            <button type="button" class="btn btn-primary px-2 py-1"
                                onclick="window.location.href='{{ route('utilisateurs.create') }}'">
                                <i class="bi bi-square-plus"></i> Ajouter une utilisateur
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body mt-4">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Mot_de_passe</th>
                                    <th>Sexe</th>
                                    <th>Date_naissance</th>
                                    <th>Date_inscription</th>
                                    <th>Statut</th>
                                    <th>Photo</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($utilisateurs as $utilisateur)
                                    <tr>
                                        <td>{{ $utilisateur->nom }}</td>
                                        {{-- Correction de la syntaxe des classes ici --}}
                                        <td class="text-uppercase text-center">{{ $utilisateur->prenom }}</td>
                                        <td class="text-uppercase text-center">{{ $utilisateur->email }}</td>
                                        <td class="text-uppercase text-center">{{ $utilisateur->mot_de_passe }}</td>
                                        <td class="text-uppercase text-center">{{ $utilisateur->sexe }}</td>
                                        <td class="text-uppercase text-center">{{ $utilisateur->date_naissance }}</td>
                                        <td class="text-uppercase text-center">{{ $utilisateur->date_inscription }}</td>
                                        <td class="text-uppercase text-center">{{ $utilisateur->statut }}</td>
                                        <td>{{ $utilisateur->Photo }}</td>

                                        {{-- Nouveau bloc OPTION --}}
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center gap-2">

                                                {{-- Bouton Modifier (icône) --}}
                                                <button class="btn btn-sm btn-outline-warning btn-edit"
                                                    data-bs-toggle="modal" data-bs-target="#editUtilisateurModal"
                                                    data-id="{{ $utilisateur->id_utilisateur ?? $utilisateur->id }}"
                                                    {{-- Utiliser id_utilisateur ou id --}} data-nom="{{ $utilisateur->nom }}"
                                                    data-prenom="{{ $utilisateur->prenom }}"
                                                    data-email="{{ $utilisateur->email }}"
                                                    data-sexe="{{ $utilisateur->sexe }}"
                                                    data-date_naissance="{{ $utilisateur->date_naissance }}"
                                                    data-date_inscription="{{ $utilisateur->date_inscription }}"
                                                    data-statut="{{ $utilisateur->statut }}"
                                                    data-photo="{{ $utilisateur->photo }}"
                                                    title="Modifier l'utilisateur">
                                                    <i
                                                        class="bi bi-pencil-square"></i>
                                                </button>

                                                {{-- Bouton Supprimer (icône) --}}
                                                <button class="btn btn-sm btn-outline-danger btn-delete"
                                                    data-bs-toggle="modal" data-bs-target="#deleteUtilisateurModal"
                                                    data-id="{{ $utilisateur->id_utilisateur ?? $utilisateur->id }}"
                                                    {{-- Utiliser id_utilisateur ou id --}} data-nom="{{ $utilisateur->nom }}"
                                                    title="Supprimer une langue">
                                                    <i
                                                        class="bi bi-trash"></i>
                                                </button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->

        <!-- Modal d'ajout de langue -->
        <div class="modal fade" id="addUtilisateurModal" tabindex="-1" aria-labelledby="addUtilisateurModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addUtilisateurModalLabel">
                            <i class="bi bi-square-plus me-2"></i>Ajouter un nouveau Utilisateur
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="utilisateurForm" action="{{ route('utilisateurs.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nom" name="nom" required
                                            maxlength="100" placeholder="Ex: Dupont">
                                        <div class="form-text text-muted">
                                            <span id="nom_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="prenom" class="form-label">Prénom <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="prenom" name="prenom" required
                                            maxlength="100" placeholder="Ex: Murelle">
                                        <div class="form-text text-muted">
                                            <span id="prenom_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email<span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required maxlength="100" placeholder="Ex: exemple@email.com">
                                        <div class="form-text text-muted">
                                            Veuillez entrer une adresse email valide.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mot_de_passe" class="form-label">Mot de passe<span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="mot_de_passe"
                                            name="mot_de_passe" required maxlength="100"
                                            placeholder="Entrez votre mot de passe">
                                        <div class="form-text text-muted">
                                            Veuillez entrer un mot de passe sécurisé.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sexe" class="form-label">Sexe<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="sexe" name="sexe" required>
                                            <option value="">Sélectionner...</option>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                        <div class="form-text text-muted">
                                            Veuillez choisir le sexe.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="date_naissance" class="form-label">Date de naissance<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="date_naissance"
                                            name="date_naissance" required>
                                        <div class="form-text text-muted">
                                            Format attendu : JJ/MM/AAAA
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="date_inscription" class="form-label">Date d'inscription<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="date_inscription"
                                            name="date_inscription" required>
                                        <div class="form-text text-muted">
                                            Format attendu : JJ/MM/AAAA
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="statut" class="form-label">Statut <span
                                        class="text-danger">*</span></label>
                                <select class="form-control" id="statut" name="statut" required>
                                    <option value="Actif" selected>Actif</option>
                                    <option value="Inactif">Inactif</option>
                                    <option value="Suspendu">Suspendu</option>
                                </select>
                                <div class="form-text text-muted">
                                    Veuillez choisir le statut de l'utilisateur.
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="photo" class="form-label">Photo (optionnel)</label>
                                <input type="file" class="form-control" id="photo" name="photo"
                                    accept="image/*">
                                <div class="form-text text-muted">
                                    Vous pouvez ajouter une photo de profil (formats acceptés : jpg, png, jpeg).
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>Annuler
                        </button>
                        <button type="submit" class="btn btn-primary" id="submitLangueBtn">
                            <i class="bi bi-check-circle me-1"></i>
                            <span id="utilisateurBtnText">Créer l'utilisateur</span>
                            <span id="utilisateurBtnSpinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal de modification de utilisateur -->
        <div class="modal fade" id="editUtilisateurModal" tabindex="-1" aria-labelledby="editUtilisateurModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title" id="editUtilisateurModalLabel">
                            <i class="bi bi-pencil-square me-2"></i>Modifier l'utilisateur
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="editUtilisateurForm"action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_utilisateur_id" name="id">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nom" name="nom"
                                            required maxlength="100" placeholder="Ex: Dupont">
                                        <div class="form-text text-muted">
                                            <span id="nom_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">

                                        <label for="prenom" class="form-label">Prénom <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="prenom" name="prenom"
                                            required maxlength="100" placeholder="Ex: Murelle">
                                        <div class="form-text text-muted">
                                            <span id="prenom_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email<span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            required maxlength="100" placeholder="Ex: exemple@email.com">
                                        <div class="form-text text-muted">
                                            Veuillez entrer une adresse email valide.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="mot_de_passe" class="form-label">Mot de passe<span
                                                class="text-danger">*</span></label>
                                        <input type="password" class="form-control" id="mot_de_passe"
                                            name="mot_de_passe" required maxlength="100"
                                            placeholder="Entrez votre mot de passe">
                                        <div class="form-text text-muted">
                                            Veuillez entrer un mot de passe sécurisé.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="sexe" class="form-label">Sexe<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="sexe" name="sexe" required>
                                            <option value="">Sélectionner...</option>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                        <div class="form-text text-muted">
                                            Veuillez choisir le sexe.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="date_naissance" class="form-label">Date de naissance<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="date_naissance"
                                            name="date_naissance" required>
                                        <div class="form-text text-muted">
                                            Format attendu : JJ/MM/AAAA
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="date_inscription" class="form-label">Date d'inscription<span
                                                class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="date_inscription"
                                            name="date_inscription" required>
                                        <div class="form-text text-muted">
                                            Format attendu : JJ/MM/AAAA
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="statut" class="form-label">Statut <span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" id="statut" name="statut" required>
                                            <option value="Actif" selected>Actif</option>
                                            <option value="Inactif">Inactif</option>
                                            <option value="Suspendu">Suspendu</option>
                                        </select>
                                        <div class="form-text text-muted">
                                            Veuillez choisir le statut de l'utilisateur.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="edit_photo" class="form-label">Photo (optionnel)</label>
                                <input type="file" class="form-control" id="edit_photo" name="photo"
                                    accept="image/*">
                                <div class="form-text text-muted">
                                    Vous pouvez ajouter une photo de profil (formats acceptés : jpg, png, jpeg).
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-1"></i>Annuler
                            </button>
                            <button type="submit" class="btn btn-warning text-white" id="updateUtilisateurBtn">
                                <i class="bi bi-check-circle me-1"></i>
                                <span id="updateUtilisateurBtnText">Modifier l'utilisateur</span>
                                <span id="updateUtilisateurBtnSpinner"
                                    class="spinner-border spinner-border-sm ms-2 d-none"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal de confirmation de suppression -->
        <div class="modal fade" id="deleteUtilisateurModal" tabindex="-1" aria-labelledby="deleteUtilisateurModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteUtilisateurModalLabel">
                            <i class="bi bi-exclamation-triangle me-2"></i>Confirmation de suppression
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer l'utilisateur"<strong id="delete_nom"></strong>" ?</p>
                        <p class="text-danger"><small>Cette action est irréversible.</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>Annuler
                        </button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">
                            <i class="bi bi-trash me-1"></i>
                            <span id="deleteBtnText">Supprimer</span>
                            <span id="deleteBtnSpinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::App Content-->
@endsection
