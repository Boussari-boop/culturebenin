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
                        <h3 class="card-title"> Gestion des Commentaires</h3>
                        <div class="text-end justify-content-end">
                            <button type="button" class="btn btn-primary px-2 py-1" data-bs-toggle="modal"
                                data-bs-target="#addCommentaireModal">
                                <i class="bi bi-square-plus"></i> Ajouter une commentaire
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body mt-4">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Text</th>
                                    <th>Note</th>
                                    <th>Date</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($commentaires as $commentaire)
                                    <tr>
                                        <td> {{ $commentaire->text }} </td>
                                        <td class="text-uppercase text-center"> {{ $commentaire->note }} </td>
                                        <td> {{ $commentaire->date }} </td>
                                        <td>
                                            <div class="d-flex justify-content-around align-items-center">
                                                <button class="btn btn-outline-primary btn-edit"
                                                    data-id="{{ $commentaire->id }}" data-nom="{{ $commentaire->text }}"
                                                    data-code="{{ $commentaire->note }}"
                                                    data-description="{{ $commentaire->date }}">
                                                    title="Modifier une commentaire">
                                                    <i class="bi bi-pencil-square"></i>
                                                </button>
                                                <button class="btn btn-outline-danger btn-delete"
                                                    data-id="{{ $commentaire->id }}" 
                                                    data-nom="{{ $commentaire->text }}">
                                                    title="Supprimer une commentaire">
                                            <i class="bi bi-trash"></i>
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



        <!-- Modal de confirmation de suppression -->
        <div class="modal fade" id="deleteCommentaireModal" tabindex="-1" aria-labelledby="deleteCommentaireModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title" id="deleteCommentaireModalLabel">
                            <i class="bi bi-exclamation-triangle me-2"></i>Confirmation de suppression
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer la langue "<strong id="delete_commentaire_nom"></strong>" ?</p>
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
    <script src="{{ URL::asset('assets/js/commentaire.js') }}"></script>
@endsection
