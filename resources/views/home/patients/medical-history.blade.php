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
                        <a class="nav-link" data-toggle="tab" href="#">Patient Medical History</a>
                        <a class="nav-link" data-toggle="tab" href="#">Diagnosis</a>
                        <a class="nav-link active" data-toggle="tab" href="#">Medical History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-save"></i> Surgical History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-file-pdf"></i> Social History</a>
                        <a class="nav-link disabled" href="#"><i class="far fa-envelope"></i>Finish</a>
                    </nav>

                    <nav class="nav">
                    </nav>
                </div><!-- card-header -->
              <div class="card-body p-3">
                <h3>Patient Details</h3>
                <form action="{{ route('medical-history-add') }}" method="post">
                    @csrf

                    <div class="row row-sm p-3">
                        <div class="col-lg">
                            <label class="ckbox m-2">
                                <input type="checkbox" value="Diabetis Type I"><span>Diabetis Type I</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" value="Diabetis Type II"><span>Diabetis Type II</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" value="Rheumatoid Athritis"><span>Rheumatoid Athritis</span>
                            </label>
                        </div><!-- col -->

                        <div class="col-lg">
                            <label class="ckbox m-2">
                                <input type="checkbox" value="Aneamia"><span>Aneamia</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" value="High Blood Pressure"><span>High Blood Pressure</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" value="Coronary Artery Dis."><span>Coronary Artery Dis.</span>
                            </label>
                        </div><!-- col -->

                        <div class="col-lg">
                            <label class="ckbox m-2">
                                <input type="checkbox" value="High Cholesterol"><span>High Cholesterol</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" value="Heart Attacks"><span>Heart Attacks</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" value="Stroke"><span>Stroke</span>
                            </label>
                        </div><!-- col -->

                    </div><!-- row -->

                    <br>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-3"><button type="reset" class="btn btn-danger btn-with-icon btn-block"><i class="typcn typcn-delete"></i> Cancel</button></div>
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
