@extends('layout')


@section('content')
    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Gestion des Regions</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Regions</a></li>
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
                <form method="POST" action="{{ route('Region.store') }}">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nom_region" class="form-label">Nom de la region</label>
                            <input type="text" class="form-control" name="nom_region" />
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" name="description" required maxlength="100"
                                placeholder="" />

                        </div>

                        <div class="mb-3">
                            <label for="population" class="form-label">Population</label>
                            <input type="population" class="form-control" name="population" required maxlength="100"
                                placeholder="" />
                        </div>

                        <div class="mb-3">
                            <label for="superficie" class="form-label">Superficie (en km²) <span
                                    class="text-danger">*</span></label>

                            <input type="number" class="form-control" id="superficie" name="superficie" required
                                min="0" step="0.01" maxlength="100" placeholder="Ex: 356.72" />
                        </div>

                        <div class="mb-3">
                            <label for="localisation" class="form-label">Localisation</label>
                            <input type="text" class="form-control" id="localisation" name="localisation"
                                placeholder="Ex: Paris, Île-de-France, France" maxlength="255" />
                        </div>


                    </div>
            </div>

            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer" style="display: flex;">
                <a href="{{ route('region.index') }}"><button class="btn btn-primary">Annuler</button></a>
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
