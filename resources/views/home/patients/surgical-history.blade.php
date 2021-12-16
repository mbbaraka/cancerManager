@extends('layouts.app')

@section('content')

@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">New Patient</h2>
            <p class="az-dashboard-text">Add Surgical History.</p>
          </div>
          <div class="az-content-header-right">
            {{--  <div class="media">
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
            </div><!-- media -->  --}}
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
                        <a class="nav-link active" href="#"><i class="far fa-save"></i> Surgical History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-file-pdf"></i> Social History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-envelope"></i>Finish</a>
                    </nav>

                    <nav class="nav">
                    </nav>
                </div><!-- card-header -->
              <div class="card-body p-3">
                <h3>Patient Surgical History</h3>
                <form action="{{ route('surgical-history-add', $id) }}" method="post">
                    @csrf

                    <div class="row row-sm p-3">
                        <div class="col-lg">
                            <div class="form-group">
                              <label for="year">Year of Surgery</label>
                              <input type="text" name="year" id="year" class="form-control @error('year') is-invalid @enderror" value="{{ old('year') }}">
                              @error('year')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                            </div>
                        </div><!-- col -->

                        <div class="col-lg">
                            <div class="form-group">
                                <label for="type">Type of Surgery</label>
                                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{ old('type') }}">
                                @error('type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                              </div>
                        </div><!-- col -->

                    </div><!-- row -->

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
