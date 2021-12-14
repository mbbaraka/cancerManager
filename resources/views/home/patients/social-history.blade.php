@extends('layouts.app')

@section('content')

@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">New Patient</h2>
            <p class="az-dashboard-text">Add Patient History.</p>
          </div>
          <div class="az-content-header-right">
            <div class="media">
              <div class="media-body">
                <label>Start Date</label>
                <h6>Oct 10, 2018</h6>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="media-body">
                <label>End Date</label>
                <h6>Oct 23, 2018</h6>
              </div><!-- media-body -->
            </div><!-- media -->
            <div class="media">
              <div class="media-body">
                <label>Event Category</label>
                <h6>All Categories</h6>
              </div><!-- media-body -->
            </div><!-- media -->
            <a href="" class="btn btn-purple">Export</a>
          </div>
        </div><!-- az-dashboard-one-title -->


        <div class="row row-sm mg-b-20">
          <div class="col-lg-12 ht-lg-100p">
            <div class="card card-dashboard-one">
                <div class="az-dashboard-nav ml-2">
                    <nav class="nav">
                        <a class="nav-link" data-toggle="tab" href="#">Patient Surgical History</a>
                        <a class="nav-link" data-toggle="tab" href="#">Diagnosis</a>
                        <a class="nav-link" data-toggle="tab" href="#">Medical History</a>
                        <a class="nav-link" href="#"><i class="far fa-save"></i> Surgical History</a>
                        <a class="nav-link active" href="#"><i class="far fa-file-pdf"></i> Social History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-envelope"></i>Finish</a>
                    </nav>

                    <nav class="nav">
                    </nav>
                </div><!-- card-header -->
              <div class="card-body p-3">
                <h3>Patient Social History</h3>
                <form action="{{ route('social-history-add', $id) }}" method="post">
                    @csrf

                    <div class="row row-sm p-3">
                        <div class="col-lg">
                            <div class="form-group">
                              <label for="status">Marital Status</label>
                                <select class="form-control @error('status') is-invalid @enderror" name="status" id="status">
                                  <option value="Married">Married</option>
                                  <option value="Single">Single</option>
                                  <option value="Divorce">Divorce</option>
                                  <option value="Widowed">Widowed</option>
                                </select>
                                @error('status')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                                @enderror
                            </div>
                        </div><!-- col -->

                        <div class="col-lg">
                            <div class="form-group">
                              <label for="tobaco_use">Tobacco Use</label>
                                <select class="form-control @error('tobaco_use') is-invalid @enderror" name="tobaco_use" id="tobaco_use">
                                    <option value="Never">Never</option>
                                    <option value="Current">Current</option>
                                    <option value="Former">Former</option>
                                </select>
                                @error('tobaco_use')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div><!-- col -->

                    </div><!-- row -->

                    <strong class="p-3">If selected Current or Former Tobacco user, please continue to fill in the fields below</strong>

                    <div class="row row-sm p-3">

                        <div class="col-lg">
                            <div class="form-group">
                              <label for="duration_of_use">Duration of Use</label>
                                <input type="number" class="form-control @error('duration_of_use') is-invalid @enderror" name="duration_of_use" id="duration_of_use" value="{{ old('duration_of_use') }}">
                                @error('duration_of_use')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div><!-- col -->

                        <div class="col-lg">
                            <div class="form-group">
                              <label for="packs_per_day">Packs Per Day</label>
                                <input value="{{ old('packs_per_day') }}" type="number" class="form-control @error('packs_per_day') is-invalid @enderror" name="packs_per_day" id="packs_per_day">
                                @error('packs_per_day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div><!-- col -->
                    </div>

                    <div class="row row-sm p-3">
                        <div class="col-lg">
                            <div class="form-group">
                                <label for="alcohol_use">Alcohol Use</label>
                                <select class="form-control @error('alcohol_use') is-invalid @enderror" name="alcohol_use" id="alcohol_use">
                                    <option value="Never">Never</option>
                                    <option value="Does Not Drink">Does Not Drink</option>
                                    <option value="Former">Former</option>
                                    <option value="Rarely">Rarely</option>
                                    <option value="Drinks Socially">Drinks Socially</option>
                                    <option value="Heavy Drinker">Heavy Drinker</option>
                                </select>
                                @error('alcohol_use')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div><!-- col -->

                        <div class="col-lg">
                            <div class="form-group">
                              <label for="bottles_per_day">Bottles Per Day</label>
                                <input value="{{ old('bottles_per_day') }}" type="number" class="form-control @error('bottles_per_day') is-invalid @enderror" name="bottles_per_day" id="bottles_per_day">
                                @error('bottles_per_day')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <small>If you answered never, skip this field</small>
                        </div><!-- col -->

                    </div>

                    <br>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-3"><a class="btn btn-danger btn-with-icon btn-block" href=""><i class="typcn typcn-delete"></i> Skip and Continue</a></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Return Back</button></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Save and Continue</button></div>
                    </div><!-- row -->
                </form>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- az-content-body -->
    </div>
  </div><!-- az-content -->

  @include('partials.footer')
  @endsection
