@extends('layout')

@section('content')
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <div class="card mb-4">
                    
                    <div class="card-header mb-3">
                        <h3 class="card-title"> Gestion des langues</h3>
                        <div class="text-end justify-content-end">
                            <button type="button" class="btn btn-primary px-2 py-1" data-bs-toggle="modal"
                                data-bs-target="#addLangueModal">
                                <i class="bi bi-square-plus"></i> Ajouter une langue
                            </button>
                        </div>
                    </div>
                    <div class="card-body mt-4">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Nom de la langue</th>
                                    <th>Code de la langue</th>
                                    <th>Description</th>
                                    <th class="text-center">Options</th> {{-- Centré pour les icônes --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($langues as $langue)
                                    <tr>
                                        <td> {{ $langue->nom_langue }} </td>
                                        <td class="text-uppercase text-center"> {{ $langue->code_langue }} </td>
                                        <td> {{ $langue->description }} </td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                {{-- Bouton MODIFIER (icône) --}}
                                                <button class="btn btn-sm btn-outline-warning btn-edit"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editLangueModal"
                                                    data-id="{{ $langue->id }}" 
                                                    data-nom="{{ $langue->nom_langue }}"
                                                    data-code="{{ $langue->code_langue }}"
                                                    data-description="{{ $langue->description }}"
                                                    title="Modifier le langue">
                                                    <i
                                                        class="bi bi-pencil-square"></i>
                                                </button>

                                                {{-- Bouton SUPPRIMER (icône) --}}
                                                <button class="btn btn-sm btn-outline-danger btn-delete"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteLangueModal"
                                                    data-id="{{ $langue->id }}" 
                                                    data-nom="{{ $langue->nom_langue }}"
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
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-end">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        {{-- ========================================================================= --}}
        {{-- DEBUT MODALS (Ajout, Modification, Suppression) --}}
        {{-- ========================================================================= --}}

        <div class="modal fade" id="addLangueModal" tabindex="-1" aria-labelledby="addLangueModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addLangueModalLabel">
                            <i class="bi bi-square-plus me-2"></i>Ajouter une langue
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="langueForm" action="{{ route('langues.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom de la langue <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="nom" name="nom_langue" required
                                            maxlength="100" placeholder="Ex: yoruba">
                                        <div class="form-text text-muted">
                                            <span id="nom_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="code" class="form-label">Code de la langue (ISO 639-1)<span
                                                class="text-danger">*</span></label>
                                        {{-- Correction de l'ID/Name pour le code langue --}}
                                        <input type="text" class="form-control text-uppercase" id="code" name="code_langue" required
                                            maxlength="2" placeholder="Ex: YO"> 
                                        <div class="form-text text-muted">
                                            <span id="code_counter">0</span>/2 caractères (ex: **FR**, **EN**, **YO**)
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="md-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="3"
                                        maxlength="255" placeholder="Ex: Une brève description de la langue..."></textarea>
                                    <div class="form-text text-muted">
                                        <span id="description_counter">0</span>/255 caractères
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        {{-- LE MODAL-FOOTER EST MAINTENANT DANS LA BALISE <form> --}}
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-1"></i>Annuler
                            </button>
                            <button type="submit" class="btn btn-primary" id="submitLangueBtn">
                                <i class="bi bi-check-circle me-1"></i>
                                <span id="langueBtnText">Créer la langue</span>
                                <span id="langueBtnSpinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editLangueModal" tabindex="-1" aria-labelledby="editLangueModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title" id="editLangueModalLabel">
                            <i class="fas fa-edit me-2"></i>Modifier la langue
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="editLangueForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT') {{-- Ajout de la méthode PUT pour la mise à jour --}}
                        <input type="hidden" id="edit_id" name="id">
                        <div class="modal-body">
                            {{-- Les champs seront remplis par JavaScript (langues.js) --}}
                            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-1"></i>Annuler
                            </button>
                            <button type="submit" class="btn btn-warning text-white" id="saveLangueBtn">
                                <i class="fas fa-save me-1"></i> Sauvegarder
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="deleteLangueModal" tabindex="-1" aria-labelledby="deleteLangueModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteLangueModalLabel">
                            <i class="bi bi-exclamation-triangle me-2"></i>Confirmation de suppression
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer la langue "<strong id="delete_langue_nom"></strong>" ?</p>
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
        {{-- ========================================================================= --}}
        {{-- FIN MODALS --}}
        {{-- ========================================================================= --}}

    </div>
    @endsection

@section('personnaljs')
    <script src="{{ URL::asset('assets/js/langues.js') }}"></script>
@endsection
