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
                <form action="{{ route('add-particulars') }}" method="post">
                    @csrf
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
                            <label for="dob">Date of Birth</label>
                            <input class="form-control @error('dob') is-invalid @enderror" name="dob" value="{{ old('dob') }}" type="date">
                            @error('dob')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="gender">Gender</label>
                            <select class="form-control select2-no-search @error('gender') is-invalid @enderror" name="gender">
                                <option label="Choose Gender"></option>
                                <option value="M">Male</option>
                                <option value="F">Female</option>
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
                          <label for="phone">Phone Number</label>
                          <input class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" type="text">
                          @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="village">Village</label>
                            <select name="village" class="form-control select2 @error('village') is-invalid @enderror">
                                <option label="Choose one"></option>
                                <option value="Ediofe">Ediofe</option>
                                <option value="Enyau">Enyau</option>
                                <option value="Ewanyapa">Ewanyapa</option>
                                <option value="Muni">Muni</option>
                                <option value="Euata">Euata</option>
                                <option value="Awindiri">Awindiri</option>
                                <option value="Oli">Oli</option>
                                <option value="Odramacaku">Odramacaku</option>
                                <option value="Internet Explorer">Internet Explorer</option>
                              </select>
                            @error('village')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="subcounty">Subcounty</label>
                            <select name="subcounty" class="form-control select2 @error('subcounty') is-invalid @enderror">
                                <option label="Choose one"></option>
                                <option value="Logiri">Logiri</option>
                                <option value="Oluko">Oluko</option>
                                <option value="Pajulu">Pajulu</option>
                                <option value="Adumi">Adumi</option>
                              </select>
                            @error('subcounty')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->
                    <br>
                    <div class="row row-sm">
                        <div class="col-lg">
                          <label for="next_of_kin">Next of Kin</label>
                          <input class="form-control @error('next_of_kin') is-invalid @enderror" name="next_of_kin" value="{{ old('next_of_kin') }}" type="text">
                          @error('next_of_kin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg">
                            <label for="next_of_kin_phone">Next of Kin Phone Number</label>
                            <input class="form-control @error('next_of_kin_phone') is-invalid @enderror" name="next_of_kin_phone" value="{{ old('next_of_kin_phone') }}" type="text">
                            @error('next_of_kin_phone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div><!-- col -->
                    </div><!-- row -->
                    <br>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-3"><button type="reset" class="btn btn-danger btn-with-icon btn-block"><i class="typcn typcn-delete"></i> Cancel</button></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Save</button></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><button type="submit" class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Save and Continue</button></div>
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
