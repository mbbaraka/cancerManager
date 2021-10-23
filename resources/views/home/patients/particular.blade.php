@extends('layouts.app')

@section('content')

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
                        <a class="nav-link active" data-toggle="tab" href="#">Patient Information</a>
                        <a class="nav-link disabled" data-toggle="tab" href="#">Diagnosis</a>
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
                <form action="" method="post">
                    <div class="row row-sm">
                        <div class="col-lg">
                          <label for="name">Patient Name</label>
                          <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="name">Date of Birth</label>
                            <input class="form-control" name="name @error('name') is-invalid @enderror" value="{{ old('name') }}" type="date">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="name">Gender</label>
                            <select class="form-control select2-no-search @error('gender') is-invalid @enderror" name="name">
                                <option label="Choose Gender"></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                            @error('gender')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->
                    <br>
                    <div class="row row-sm">
                        <div class="col-lg">
                          <label for="name">Phone Number</label>
                          <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="name">Village</label>
                            <select class="form-control select2">
                                <option label="Choose one"></option>
                                <option value="Firefox">Firefox</option>
                                <option value="Chrome">Chrome</option>
                                <option value="Safari">Safari</option>
                                <option value="Opera">Opera</option>
                                <option value="Internet Explorer">Internet Explorer</option>
                              </select>
                            <input class="form-control" name="name @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="name">Subcounty</label>
                            <input class="form-control" name="name @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->
                    <br>
                    <div class="row row-sm">
                        <div class="col-lg">
                          <label for="name">Next of Kin</label>
                          <input class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" type="text">
                          @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="name">Next of Kin PHone Number</label>
                            <input class="form-control" name="name @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="name">Gender</label>
                            <input class="form-control" name="name @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text">
                            @error('name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->
                </form>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- az-content-body -->
    </div>
  </div><!-- az-content -->

  @endsection
