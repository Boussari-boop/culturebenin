@extends('layout')


@section('content')


    <div class="row">
        <div class="col-sm-6">
            <h3 class="mb-0">Gestion des type-medias</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><a href="#">Type-media</a></li>
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
                <form method="POST" action="{{ route('type-medias.store') }}">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nom_media" class="form-label">Nom d'une media</label>
                            <input type="text" class="form-control" name="nom_media" />

                        </div>

                        <!--end::Body-->
                        <!--begin::Footer-->
                        <div class="card-footer" style="display: flex;">
                            <a href="{{ route('type-medias.index') }}"><button class="btn btn-primary">Annuler</button></a>
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
