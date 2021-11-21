@extends('layouts.app')

@section('content')

@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">New Patient</h2>
            <p class="az-dashboard-text">Add new cancer suspect case.</p>
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
                        <a class="nav-link" data-toggle="tab" href="#">Patient Information</a>
                        <a class="nav-link active" data-toggle="tab" href="#">Diagnosis</a>
                        <a class="nav-link disabled" data-toggle="tab" href="#">Medical History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-save"></i> Surgical History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-file-pdf"></i> Social History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-envelope"></i>Finish</a>
                    </nav>

                    <nav class="nav">
                    </nav>
                </div><!-- card-header -->
              <div class="card-body p-3">
                <h3>Patient Details</h3>
                <form action="{{ route('diagnosis-add', $id) }}" method="post">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-lg">
                          <label for="name">Patient Referred By <small>(Leave empty if patient not referred)</small></label>
                          <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="status">Status</label>
                            <select class="form-control select2-no-search @error('status') is-invalid @enderror" name="status">
                                <option label="Choose Patient Status"></option>
                                <option value="Suspect">Suspect</option>
                                <option value="Positive" data-toggle="collapse">Positive</option>
                              </select>
                            @error('status')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->
                    <br>
                    <strong class="">If positive please continue to fill in the fields below. Ignore if suspect.</strong>

                    <div class="row row-sm pt-3">
                        <div class="col-lg">
                          <label for="stage">Cancer Stage</label>
                          <select class="form-control select2-no-search @error('stage') is-invalid @enderror" name="stage">
                            <option label="Choose Cancer Stage"></option>
                            <option value="Stage One">Stage One</option>
                            <option value="Stage Two">Stage Two</option>
                          </select>
                          @error('stage')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="treatment">Treatment</label>
                            <select class="form-control select2-no-search @error('treatment') is-invalid @enderror" name="treatment">
                                <option label="Choose Treatment"></option>
                                <option value="Chemotherapy">Chemotherapy</option>
                                <option value="Radiotherapy">Radiotherapy</option>
                              </select>
                            @error('treatment')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->

                    <div class="row row-sm pt-3">
                        <div class="col-lg">
                          <label for="name">Description</label>
                          <textarea class="form-control @error('description') is-invalid @enderror" name="description">
                            {{ old('description') }}
                          </textarea>
                          @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="attachments">Attachments</label>
                            <input type="file" name="attachments" id="" multiple class="form-control @error('attachments') is-invalid @enderror">
                            @error('attachments')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->

                    <br>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-3"><button type="reset" class="btn btn-danger btn-with-icon btn-block"><i class="typcn typcn-delete"></i> Cancel</button></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><a class="btn btn-primary btn-with-icon btn-block" href="{{ route('new-patient') }}"><i class="far fa-return"></i> Return Back</a></div>
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
