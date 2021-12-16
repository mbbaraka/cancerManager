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
                <h3>Patient Medical History</h3>
                <form action="{{ route('medical-history-add', $id) }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row row-sm p-3">
                        <div class="col-lg">
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="Diabetis Type I"><span>Diabetis Type I</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="Diabetis Type II"><span>Diabetis Type II</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="Rheumatoid Athritis"><span>Rheumatoid Athritis</span>
                            </label>
                        </div><!-- col -->

                        <div class="col-lg">
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="Aneamia"><span>Aneamia</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="High Blood Pressure"><span>High Blood Pressure</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="Coronary Artery Dis."><span>Coronary Artery Dis.</span>
                            </label>
                        </div><!-- col -->

                        <div class="col-lg">
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="High Cholesterol"><span>High Cholesterol</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="Heart Attacks"><span>Heart Attacks</span>
                            </label>
                            <label class="ckbox m-2">
                                <input type="checkbox" name="disease[]" value="Stroke"><span>Stroke</span>
                            </label>
                        </div><!-- col -->

                    </div><!-- row -->

                    <br>
                    <div class="row row-xs wd-xl-80p">
                        <div class="col-sm-6 col-md-3"><a class="btn btn-danger btn-with-icon btn-block" href=""><i class="typcn typcn-delete"></i> Skip and Continue</a></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0"><a class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Return Back</a></div>
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
