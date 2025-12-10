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
                        <h3 class="card-title">Gestion des Roles</h3>
                        <div class="text-end justify-content-end">
                            <button type="button" class="btn btn-primary px-2 py-1" data-bs-toggle="modal"
                                data-bs-target="#addRoleModal">
                                <i class="bi bi-square-plus"></i> Ajouter une role
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body mt-4">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th class="text-center">Options</th>
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->nom }}</td>
                                        <td class="text-center">
                                            <div
                                                class="d-flex justify-content-center gap-2">
                                                {{-- Modification: Ouvre la modal d'édition --}}
                                                <button
                                                    class="btn btn-sm btn-outline-warning btn-edit-role"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editRoleModal"
                                                    data-id="{{ $role->id }}"
                                                    data-nom="{{ $role->nom }}"
                                                    title="Modifier le Rôle">
                                                    <i
                                                        class="bi bi-pencil-square"></i>
                                                    </button>

                                                {{-- Suppression: Ouvre la modal de suppression --}}
                                                <button
                                                    class="btn btn-sm btn-outline-danger btn-delete-role"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteRoleModal"
                                                    data-id="{{ $role->id }}"
                                                    
                                                    data-nom="{{ $role->nom }}"
                                                    title="Supprimer le Rôle">
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
        <div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addRoleModalLabel">
                            <i class="bi bi-square-plus me-2"></i>Ajouter une role
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="roleForm" action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nom_role" class="form-label">
                                            Nom du role <span class="text-danger">*</span>
                                        </label>

                                        <input type="text" class="form-control" id="nom_role" name="nom_role" required
                                            maxlength="100" placeholder="Ex: Administrateur">

                                        <div class="form-text text-muted">
                                            <span id="nom_role_counter">0</span>/100 caractères
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
    <div class="modal fade" id="editRoleModal" tabindex="-1" aria-labelledby="editRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-warning text-white">
                    <h5 class="modal-title" id="editRoleModalLabel">
                        <i class="bi bi-pencil-square me-2"></i>Modifier role
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <form id="editRoleForm"action="" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="hidden" id="edit_role_id" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="nom_role" class="form-label">
                                        Nom du rôle <span class="text-danger">*</span>
                                    </label>

                                    <input type="text" class="form-control" id="nom_role" name="nom_role" required
                                        maxlength="100" placeholder="Ex: Administrateur">

                                    <div class="form-text text-muted">
                                        <span id="nom_role_counter">0</span>/100 caractères
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
    <div class="modal fade" id="deleteRoleModal" tabindex="-1" aria-labelledby="deleteRoleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteRoleModalLabel">
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
    <script src="{{ URL::asset('assets/js/roles.js') }}"></script>
@endsection
