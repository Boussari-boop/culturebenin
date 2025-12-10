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
                        <h3 class="card-title">Gestion des type-contenus </h3>
                        <div class="text-end justify-content-end">
                            <button type="button" class="btn btn-primary px-2 py-1" onclick="window.location.href='{{ route('type-contenus.create') }}'">
                                <i class="bi bi-square-plus"></i> Ajouter un type_contenu
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body mt-4">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Nom du contenu</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($type_contenus as $type_contenu)
                                    <tr>
                                        <td> {{ $type_contenu->nom_contenu }} </td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-2">
                                                {{-- Bouton MODIFIER (icône) --}}
                                                <button class="btn btn-sm btn-outline-warning btn-edit"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editType_contenuModal"
                                                    data-id="{{ $type_contenu->id }}" 
                                                    data-nom="{{ $type_contenu->nom_contenu }}"
                                                    title="Modifier type-contenu">
                                                    <i
                                                        class="bi bi-pencil-square"></i>
                                                </button>

                                                {{-- Bouton SUPPRIMER (icône) --}}
                                                <button class="btn btn-sm btn-outline-danger btn-delete"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteType-contenuModal"
                                                    data-id="{{ $type_contenu->id }}" 
                                                    data-nom="{{ $type_contenu->nom_contenu }}"
                                                     title="Supprimer une contenu">
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

        <!-- Modal de modification de type-contenu -->
        <div class="modal fade" id="editTypecontenuModal" tabindex="-1" aria-labelledby="editTypecontenuModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title" id="edittypecontenuModalLabel">
                            <i class="bi bi-pencil-square me-2"></i>Modifier le contenu
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="editTypecontenuForm" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_typecontenu_id" name="id">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="edit_nom_contenu" class="form-label">Nom d'une contenu <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="edit_nom_contenu"
                                            name="nom_contenu" required maxlength="100" placeholder="Ex: Rectte du jour">
                                        <div class="form-text text-muted">
                                            <span id="edit_nom_contenu_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="bi bi-x-circle me-1"></i>Annuler
                            </button>
                            <button type="submit" class="btn btn-warning text-white" id="updateTypecontenuBtn">
                                <i class="bi bi-check-circle me-1"></i>
                                <span id="updateTypecontenuBtnText">Modifier le contenu</span>
                                <span id="updateTypecontenuBtnSpinner"
                                    class="spinner-border spinner-border-sm ms-2 d-none"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal de confirmation de suppression -->
        <div class="modal fade" id="deleteTypecontenuModal" tabindex="-1" aria-labelledby="deleteTypecontenuModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteTypecontenuModalLabel">
                            <i class="bi bi-exclamation-triangle me-2"></i>Confirmation de suppression
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer le contenu "<strong id="delete_contenu_nom"></strong>" ?</p>
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
