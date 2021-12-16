@extends('layouts.app')

@section('content')

@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">System Users</h2>
            <p class="az-dashboard-text">Add new Patient.</p>
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
              <div class="card-body p-3">
                <h3>User Details</h3>
                <form action="{{ route('add.user') }}" method="post">
                    @csrf
                    <div class="row row-sm">
                        <div class="col-lg-6">
                          <label for="name">First Name</label>
                          <input class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" type="text">
                          @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div><!-- col -->
                        <div class="col-lg-6">
                            <label for="name">Last Name</label>
                            <input class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" type="text">
                            @error('last_name')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div><!-- col -->
                          <br>
                          <div class="col-lg-6 mt-4">
                            <label for="name" >Phone Number</label>
                            <input class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" type="text">
                            @error('phone')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                          </div><!-- col -->
                          <div class="col-lg-6 mt-4">
                              <label for="name">Email</label>
                              <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" type="email">
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                              @enderror
                           </div><!-- col -->
                    <br>
                    </div>
                    <br>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-3"><button type="reset" class="btn btn-danger btn-with-icon btn-block"><i class="typcn typcn-delete"></i> Cancel</button></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><button type="submit" class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Save</button></div>
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
