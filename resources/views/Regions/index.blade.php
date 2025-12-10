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
                        <h3 class="card-title">Gestion des Regions</h3>
                        <div class="text-end justify-content-end">
                            <button type="button" class="btn btn-primary px-2 py-1" data-bs-toggle="modal"
                                data-bs-target="#addRegionModal">
                                <i class="bi bi-square-plus"></i> Ajouter une Region
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body mt-4">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Nom de la région</th>
                                    <th>Description</th>
                                    <th>Population</th>
                                    <th>Superficie</th>
                                    <th>Localisation</th>
                                    <th class="text-center">Options</th>
                                    {{-- Centré pour les icônes --}}
                                    </tr>
                                </thead>
                            <tbody>
                                @foreach ($regions as $region)
                                    <tr>
                                        <td>{{ $region->nom_region }}</td>
                                        <td>{{ $region->description }}</td>
                                        <td>{{ $region->population }}</td>
                                        <td>{{ $region->superficie }}</td>
                                        <td>{{ $region->localisation }}</td>
                                        <td>
                                            <div
                                                class="d-flex justify-content-center gap-2">
                                                {{-- Bouton MODIFIER --}}
                                                <button
                                                    class="btn btn-sm btn-outline-warning btn-edit"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editRegionModal"
                                                    
                                                    data-id="{{ $region->id }}"
                                                    data-nom="{{ $region->nom_region }}"
                                                    data-description="{{ $region->description }}"
                                                    
                                                    data-population="{{ $region->population }}"
                                                    data-superficie="{{ $region->superficie }}"
                                                    
                                                    data-localisation="{{ $region->localisation }}"
                                                        title="Modifier la Région">
                                                    <i
                                                        class="bi bi-pencil-square"></i>
                                                    </button>

                                                {{-- Bouton SUPPRIMER --}}
                                                <button
                                                    class="btn btn-sm btn-outline-danger btn-delete"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#deleteRegionModal"
                                                    
                                                    data-id="{{ $region->id }}"
                                                    data-nom="{{ $region->nom_region }}"
                                                        title="Supprimer une Région">
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
        <div class="modal fade" id="addRegionModal" tabindex="-1" aria-labelledby="addRegionModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title" id="addRegionModelLabel"></h5>
                        <i class="bi bi-square-plus me-2"></i>Ajouter une region
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="regionForm" action="{{ route('regions.store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nom_region" class="form-label">
                                            Nom de la région <span class="text-danger">*</span>
                                        </label>

                                        <input type="text" class="form-control" id="nom_region" name="nom_region"
                                            required maxlength="100" placeholder="Ex: Île-de-France">

                                        <div class="form-text text-muted">
                                            <span id="nom_region_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">
                                            Description <span class="text-danger">*</span>
                                        </label>

                                        <textarea class="form-control" id="description" name="description" required maxlength="500"
                                            placeholder="Description de la région..."></textarea>

                                        <div class="form-text text-muted">
                                            <span id="description_counter">0</span>/500 caractères
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="population" class="form-label">Population <span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="population" name="population"
                                            required placeholder="Ex: 2500000">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="superficie" class="form-label">Superficie (km²) <span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="superficie" name="superficie"
                                            required placeholder="Ex: 12012">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="localisation" class="form-label">Localisation <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="localisation" name="localisation"
                                            required placeholder="Ex: Nord">
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                    <i class="bi bi-x-circle me-1"></i>Annuler
                                </button>
                                <button type="submit" class="btn btn-primary" id="submitRegionBtn">
                                    <i class="bi bi-check-circle me-1"></i>
                                    <span id="regionbtnText">Créer la region</span>
                                    <span id="regionBtnSpinner"
                                        class="spinner-border spinner-border-sm ms-2 d-none"></span>
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal de modification la region -->
        <div class="modal fade" id="editRegionModal" tabindex="-1" aria-labelledby="editRegionModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header bg-warning text-white">
                        <h5 class="modal-title" id="editRegionModalLabel">
                            <i class="bi bi-pencil-square me-2"></i>Modifier la region
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <form id="editRegionForm"action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" id="edit_region_id" name="id">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="nom_region" class="form-label">
                                            Nom de la région <span class="text-danger">*</span>
                                        </label>

                                        <input type="text" class="form-control" id="nom_region" name="nom_region"
                                            required maxlength="100" placeholder="Ex: Île-de-France">

                                        <div class="form-text text-muted">
                                            <span id="nom_region_counter">0</span>/100 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="description" class="form-label">
                                            Description <span class="text-danger">*</span>
                                        </label>

                                        <textarea class="form-control" id="description" name="description" required maxlength="500"
                                            placeholder="Description de la région..."></textarea>

                                        <div class="form-text text-muted">
                                            <span id="description_counter">0</span>/500 caractères
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="population" class="form-label">Population <span
                                                class="text-danger">*</span></label>
                                        <input type="number" class="form-control" id="population" name="population"
                                            required placeholder="Ex: 2500000">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="superficie" class="form-label">Superficie (km²) <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="superficie" name="superficie"
                                        required placeholder="Ex: 12012">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="localisation" class="form-label">Localisation <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="localisation" name="localisation"
                                        required placeholder="Ex: Nord">
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        <i class="bi bi-x-circle me-1"></i>Annuler
                    </button>
                    <button type="submit" class="btn btn-warning text-white" id="updateRegionBtn">
                        <i class="bi bi-check-circle me-1"></i>
                        <span id="updateRegionBtnText">Modifier le region</span>
                        <span id="updateRegionBtnSpinner" class="spinner-border spinner-border-sm ms-2 d-none"></span>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class="modal fade" id="deleteRegionModal" tabindex="-1" aria-labelledby="deleteRegionModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="deleteRegionModalLabel">
                        <i class="bi bi-exclamation-triangle me-2"></i>Confirmation de suppression
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous sûr de vouloir supprimer la region"<strong id="delete_nom"></strong>" ?</p>
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
    <script src="{{ URL::asset('assets/js/region.js') }}"></script>
@endsection
