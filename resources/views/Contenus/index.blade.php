@extends('layout')

@section('content')
<!--begin::App Content-->
<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="card mb-4">
                <div class="card-header mb-3">
                    <h3 class="card-title">Gestion Contenus</h3>
                    <div class="text-end justify-content-end">
                        <button type="button" class="btn btn-primary px-2 py-1"
                            onclick="window.location.href='{{ route('contenus.create') }}'">
                            <i class="bi bi-square-plus"></i> Ajouter un contenu
                        </button>
                    </div>
                </div>
                <div class="card-body mt-4">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th>Titre</th>
                                <th>Texte</th>
                                <th>Date création</th>
                                <th>Statut</th>
                                <th>Parent ID</th>
                                <th>Date validation</th>
                                <th>Région</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contenus as $contenu)
                            <tr>
                                <td>{{ $contenu->titre }}</td>
                                <td>{{ Str::limit($contenu->texte, 50) }}</td>
                                <td>{{ $contenu->date_creation }}</td>
                                <td>{{ $contenu->statut }}</td>
                                <td>{{ $contenu->parent_id }}</td>
                                <td>{{ $contenu->date_validation}}</td>
                                <td>{{ $contenu->region->nom }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Modifier -->
                                        <button class="btn btn-sm btn-outline-warning btn-edit"
                                            data-bs-toggle="modal" data-bs-target="#editContenuModal"
                                            data-id="{{ $contenu->id }}"
                                            data-titre="{{ $contenu->titre }}"
                                            data-texte="{{ $contenu->texte }}"
                                            data-statut="{{ $contenu->statut }}"
                                            data-parent_id="{{ $contenu->parent_id }}"
                                            data-date_validation="{{ $contenu->date_validation }}"
                                            data-region_id="{{ $contenu->id_region }}"
                                            title="Modifier le contenu">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <!-- Supprimer -->
                                        <button class="btn btn-sm btn-outline-danger btn-delete"
                                            data-bs-toggle="modal" data-bs-target="#deleteContenuModal"
                                            data-id="{{ $contenu->id }}"
                                            data-titre="{{ $contenu->titre }}"
                                            title="Supprimer le contenu">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Modal d'ajout de contenu -->
        <div class="modal fade" id="addContenuModal" tabindex="-1" aria-labelledby="addContenuModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addContenuModalLabel"><i class="bi bi-square-plus me-2"></i>Ajouter un contenu</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('contenus.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="titre" class="form-label">Titre</label>
                                <input type="text" class="form-control" id="titre" name="titre" required>
                            </div>
                            <div class="mb-3">
                                <label for="texte" class="form-label">Texte</label>
                                <textarea class="form-control" id="texte" name="texte" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="statut" class="form-label">Statut</label>
                                <select class="form-control" id="statut" name="statut" required>
                                    <option value="actif" selected>Actif</option>
                                    <option value="inactif">Inactif</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="parent_id" class="form-label">Parent</label>
                                <input type="number" class="form-control" id="parent_id" name="parent_id">
                            </div>
                            <div class="mb-3">
                                <label for="date_validation" class="form-label">Date validation</label>
                                <input type="date" class="form-control" id="date_validation" name="date_validation">
                            </div>
                            <div class="mb-3">
                                <label for="id_region" class="form-label">Région</label>
                                <select class="form-control" id="id_region" name="id_region" required>
                                    @foreach($regions as region)
                                    <option value="{{ $region->id }}">{{ $region->nom }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Créer le contenu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal de suppression -->
        <div class="modal fade" id="deleteContenuModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">Confirmation de suppression</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer le contenu "<strong id="delete_titre"></strong>" ?</p>
                        <p class="text-danger"><small>Cette action est irréversible.</small></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Supprimer</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!--end::App Content-->
@endsection
