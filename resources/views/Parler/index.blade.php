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
                        <h3 class="card-title">Gestion de Parle</h3>
                        <div class="text-end justify-content-end">
                            <button type="button" class="btn btn-primary px-2 py-1" data-bs-toggle="modal"
                                data-bs-target="#addParleModal">
                                <i class="bi bi-square-plus"></i> Ajouter 
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body mt-4">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>id_region </th>
                                    <th>id_langue</th>
                                    <th class="text-center">Options</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($parles as $parle)
                                    <tr>
                                        <td>{{ $parle->id_region }}</td>
                                        <td>{{ $parle->id_langue}}</td>
                                        <td class="text-center">
                                            <div
                                                class="d-flex justify-content-center gap-2">
                                                {{-- Modification: Ouvre la modal d'édition --}}
                                                <button
                                                    class="btn btn-sm btn-outline-warning btn-edit-role"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editParleModal"
                                                    data-id="{{ $parle->id_region }}"
                                                    data-id="{{ $parle->id_langue }}"
                                                    title="Modifier">
                                                    <i
                                                        class="bi bi-pencil-square"></i>
                                                    </button>

                                                {{-- Suppression: Ouvre la modal de suppression --}}
                                                <button
                                                    class="btn btn-sm btn-outline-danger btn-delete-role"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteParleModal"
                                                    data-id="{{ $parle->id_region }}"
                                                    
                                                    data-nom="{{ $parle->id_langue }}"
                                                    title="Supprimer">
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

        <!-- Modal d'ajout de role -->
        <div class="modal fade" id="addParleModal" tabindex="-1" aria-labelledby="addParleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addParleModalLabel">
                            <i class="bi bi-square-plus me-2"></i>Ajouter une role
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="parleForm" action="{{ route('parles.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="id_region" class="form-label">
                                            id_region <span class="text-danger">*</span>
                                        </label>

                                        <input type="text" class="form-control" id="id_region" name="id_region" required
                                            maxlength="100" placeholder="Ex: ">

                                        <div class="form-text text-muted">
                                            <span id="id_region_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="id_langue" class="form-label">
                                            id_parle <span class="text-danger">*</span>
                                        </label>

                                        <input type="text" class="form-control" id="id_langue" name="id_langue" required
                                            maxlength="100" placeholder="Ex: ">

                                        <div class="form-text text-muted">
                                            <span id="id_langue_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>





                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Annuler
                    </button>
                    <button type="submit" class="btn btn-primary" id="submitroleBtn">
                        <i class="bi bi-check-circle me-1"></i>
                        <span id="roleBtnText">Créer un role</span>
                        <span id="roleBtnSpinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de modification de role -->
    <div class="modal fade" id="editParleModal" tabindex="-1" aria-labelledby="editParleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="editParleModalLabel">
                        <i class="bi bi-pencil-square me-2"></i>Modifier role
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="editParleForm"action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_role_id" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="id_region" class="form-label">
                                        id_region <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" id="id_region" name="id_region" required
                                        maxlength="100" placeholder="Ex: ">

                                    <div class="form-text text-muted">
                                        <span id="id_region_counter">0</span>/100 caractères
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="id_langue" class="form-label">
                                        id_langue <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" id="id_langue" name="id_langue" required
                                        maxlength="100" placeholder="Ex: ">

                                    <div class="form-text text-muted">
                                        <span id="id_region_counter">0</span>/100 caractères
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="bi bi-x-circle me-1"></i>Annuler
                        </button>
                        <button type="submit" class="btn btn-warning text-white" id="updateRoleBtn">
                            <i class="bi bi-check-circle me-1"></i>
                            <span id="updateRoleBtnText">Modifier role</span>
                            <span id="updateRoleBtnSpinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class="modal fade" id="deleteParleModal" tabindex="-1" aria-labelledby="deleteParleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteParleModalLabel">
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

@section('personnaljs')
    <script src="{{ URL::asset('assets/js/parles.js') }}"></script>
@endsection
