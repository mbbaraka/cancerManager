@extends('layouts.app')

@section('content')
@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">Hi, welcome back!</h2>
            <p class="az-dashboard-text">Your cancer management system dashboard.</p>
          </div>
          <div class="az-content-header-right">
            <a href="" class="btn btn-purple">Export</a>
          </div>
        </div><!-- az-dashboard-one-title -->

        <div class="az-dashboard-nav">
          <nav class="nav">
            <a class="nav-link active" data-toggle="tab" href="#">Overview</a>
          </nav>

          <nav class="nav">
            <a class="nav-link" href="#"><i class="far fa-save"></i> Save Report</a>
            <a class="nav-link" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
            <a class="nav-link" href="#"><i class="fas fa-ellipsis-h"></i></a>
          </nav>
        </div>

        <div class="row row-sm mg-b-20">
          <div class="col-lg-7 ht-lg-100p">
            <div class="card card-dashboard-one">
              <div class="card-header">
                <div>
                  <h6 class="card-title">Cancer Reports at Arua Regional Referral Hospital</h6>
                  <p class="card-text">Audience to which the users belonged while on the current date range.</p>
                </div>
                <div class="btn-group">
                  <button class="btn active">Day</button>
                  <button class="btn">Week</button>
                  <button class="btn">Month</button>
                </div>
              </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="row row-sm">
                    <div class="col-sm-6">
                      <div class="card card-dashboard-two">
                        <div class="card-header pb-3">
                          <h6>33.50% <i class="icon ion-md-trending-up tx-success"></i> <small>18.02%</small></h6>
                          <p>New Cases</p>
                        </div><!-- card-header -->
                      </div><!-- card -->
                    </div><!-- col -->
                    <div class="col-sm-6">
                      <div class="card card-dashboard-two">
                        <div class="card-header pb-3">
                          <h6>86k <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small></h6>
                          <p>Critical</p>
                        </div><!-- card-header -->
                      </div><!-- card -->
                    </div><!-- col -->
                  </div><!-- row -->
                  <br>
                  <div class="row row-sm">
                    <div class="col-sm-6">
                        <div class="card card-dashboard-two">
                          <div class="card-header pb-3">
                            <h6>86k <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small></h6>
                            <p>On Treatment</p>
                          </div><!-- card-header -->
                        </div><!-- card -->
                      </div><!-- col -->
                      <div class="col-sm-6">
                        <div class="card card-dashboard-two">
                          <div class="card-header pb-3">
                            <h6>86k <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small></h6>
                            <p>Total Cases</p>
                          </div><!-- card-header -->
                        </div><!-- card -->
                      </div><!-- col -->
                  </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-lg-5 mg-t-20 mg-lg-t-0">
            <div class="card card-dashboard-pageviews">
                <div class="card-header">
                  <h6 class="card-title">Cancer Reports by Type</h6>
                  <p class="card-text">This report is based on the patients recorded in the system</p>
                </div><!-- card-header -->
                <div class="card-body">
                  <div class="az-list-item">
                    <div>
                      <h6>Lung Cancer</h6>
                      <span>Percentage</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">{{ number_format($lung_cancer) }}</h6>
                      <span>{{ ($lung_cancer/$cancer)*100 }}%</span>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Breast Cancer</h6>
                      <span>Percentage</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">{{ number_format($breast_cancer) }}</h6>
                      <span>{{ ($breast_cancer/$cancer)*100 }}%</span>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Skin Cancer</h6>
                      <span>Percentage</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">{{ number_format($skin_cancer) }}</h6>
                      <span>{{ ($skin_cancer/$cancer)*100 }}%</span>
                    </div>
                  </div><!-- list-group-item -->
                  <div class="az-list-item">
                    <div>
                      <h6>Cervical Cancer</h6>
                      <span>Percentage</span>
                    </div>
                    <div>
                      <h6 class="tx-primary">{{ number_format($cervical_cancer) }}</h6>
                      <span>{{ ($cervical_cancer/$cancer)*100 }}%</span>
                    </div>
                  </div><!-- list-group-item -->
                </div><!-- card-body -->
              </div><!-- card -->
          </div><!--col -->
        </div><!-- row -->

        <div class="row row-sm mg-b-20">
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="card card-dashboard-four">
              <div class="card-header">
                <h6 class="card-title text-center">Effects By Gender</h6>
              </div><!-- card-header -->
              <div class="card-body row">
                <div class="col-md-6 col-lg-5 mg-lg-r-auto mg-t-20 mg-md-t-0">
                    <h6 class="text-center">Male</h6>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Lung Cancer</span>
                        <span>1,320 <span>(25%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-purple wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Breast Cancer</span>
                        <span>987 <span>(20%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-primary wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Skin Cancer</span>
                        <span>2,010 <span>(30%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-info wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Cervical Cancer</span>
                        <span>654 <span>(15%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-teal wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                  </div><!-- col -->
                <div class="col-md-6 col-lg-5 mg-lg-l-auto mg-t-20 mg-md-t-0">
                    <h6 class="text-center">Female</h6>
                    <div class="az-traffic-detail-item">
                        <div>
                          <span>Lung Cancer</span>
                          <span>1,320 <span>(25%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-purple wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                      <div class="az-traffic-detail-item">
                        <div>
                          <span>Breast Cancer</span>
                          <span>987 <span>(20%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-primary wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                      <div class="az-traffic-detail-item">
                        <div>
                          <span>Skin Cancer</span>
                          <span>2,010 <span>(30%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-info wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                      <div class="az-traffic-detail-item">
                        <div>
                          <span>Cervical Cancer</span>
                          <span>654 <span>(15%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-teal wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                </div><!-- col -->
              </div><!-- card-body -->
            </div><!-- card-dashboard-four -->
          </div><!-- col -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="card card-table-one">
              <h6 class="card-title">Report by Location</h6>
              <p class="az-content-text mg-b-20">This indicates the report basing on the sub countries recorded in the system</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="wd-5p">&nbsp;</th>
                      <th>Subcounty</th>
                      <th>Percentage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#</td>
                      <td>Pajulu</td>
                      <td>{{ ($location_pajulu/$location)*100 }}%</td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td>Oluko</td>
                        <td>{{ ($location_oluko/$location)*100 }}%</td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>Adumi</td>
                        <td>{{ ($location_adumi/$location)*100 }}%</td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td>Logiri</td>
                        <td>{{ ($location_logiri/$location)*100 }}%</td>
                      </tr>
                  </tbody>
                </table>
              </div><!-- table-responsive -->
            </div><!-- card -->
          </div><!-- col-lg -->
        </div><!-- row -->

      </div><!-- az-content-body -->
    </div>
  </div><!-- az-content -->
@include('partials.footer')
@endsection
