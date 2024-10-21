@extends('dashboard.main')

@section('title', 'Accueil')


@section('content')

    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Informations Personnelles</h4>
                        <form class="form-sample">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Nom & Prénoms</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="fullname" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Matricule</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="matricule" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Direction</label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Service</label>
                                        <div class="col-sm-9">
                                            <select class="form-control">
                                                <option>Category1</option>
                                                <option>Category2</option>
                                                <option>Category3</option>
                                                <option>Category4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Fonction</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="fonction" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Sexe</label>
                                        <div class="col-sm-4">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="sexe"
                                                        id="sexe1" value="0" checked>
                                                    Femme
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="sexe"
                                                        id="sexe2" value="1">
                                                    Homme
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Adresse</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="adresse" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Ville/Commune</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="state" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">Numéro</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="tel" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-form-label">E-Mail</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="email" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                    <div class="position-absolute bottom-2 end-0">
                                        <button type="submit" class="btn btn-primary me-4 mb-6">Modifier</button>
                                    </div>
                                </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
