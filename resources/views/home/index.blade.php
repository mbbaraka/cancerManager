@extends('layouts.app')

@section('content')
<div class="az-header">
    <div class="container">
      <div class="az-header-left">
        <a href="index.html" class="az-logo"><span></span> Cancer Management System</a>
        <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
      </div><!-- az-header-left -->
      <div class="az-header-menu">
        <div class="az-header-menu-header">
          <a href="index.html" class="az-logo"><span></span> CMS</a>
          <a href="" class="close">&times;</a>
        </div><!-- az-header-menu-header -->
        <ul class="nav">
          <li class="nav-item active show">
            <a href="index.html" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link with-sub"><i class="typcn typcn-document"></i> Patients</a>
            <nav class="az-menu-sub">
              <a href="#" class="nav-link">Add New</a>
              <a href="#" class="nav-link">View All</a>
            </nav>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Incharge Portal</a>
          </li>
         {{-- <li class="nav-item">
            <a href="form-elements.html" class="nav-link"><i class="typcn typcn-chart-bar-outline"></i> Forms</a>
          </li> --}}
        </ul>
      </div><!-- az-header-menu -->
      <div class="az-header-right">
        <div class="dropdown az-header-notification">
          <a href="" class="new"><i class="typcn typcn-bell"></i></a>
          <div class="dropdown-menu">
            <div class="az-dropdown-header mg-b-20 d-sm-none">
              <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
            </div>
            <h6 class="az-notification-title">Notifications</h6>
            <p class="az-notification-text">You have 2 unread notification</p>
            <div class="az-notification-list">
              <div class="media new">
                <div class="az-img-user"><img src="../img/faces/face2.jpg" alt=""></div>
                <div class="media-body">
                  <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                  <span>Mar 15 12:32pm</span>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media new">
                <div class="az-img-user online"><img src="../img/faces/face3.jpg" alt=""></div>
                <div class="media-body">
                  <p><strong>Joyce Chua</strong> just created a new blog post</p>
                  <span>Mar 13 04:16am</span>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="az-img-user"><img src="../img/faces/face4.jpg" alt=""></div>
                <div class="media-body">
                  <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                  <span>Mar 13 02:56am</span>
                </div><!-- media-body -->
              </div><!-- media -->
              <div class="media">
                <div class="az-img-user"><img src="../img/faces/face5.jpg" alt=""></div>
                <div class="media-body">
                  <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                  <span>Mar 12 10:40pm</span>
                </div><!-- media-body -->
              </div><!-- media -->
            </div><!-- az-notification-list -->
            <div class="dropdown-footer"><a href="">View All Notifications</a></div>
          </div><!-- dropdown-menu -->
        </div><!-- az-header-notification -->
        <div class="dropdown az-profile-menu">
          <a href="" class="az-img-user"><img src="../img/faces/face1.jpg" alt=""></a>
          <div class="dropdown-menu">
            <div class="az-dropdown-header d-sm-none">
              <a href="" class="az-header-arrow"><i class="icon ion-md-arrow-back"></i></a>
            </div>
            <div class="az-header-profile">
              <div class="az-img-user">
                <img src="../img/faces/face1.jpg" alt="">
              </div><!-- az-img-user -->
              <h6>{{ Auth::user()->name }}</h6>
              <span>Doctor</span>
            </div><!-- az-header-profile -->

            <a href="" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
            <a href="" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             <i class="typcn typcn-power-outline"></i> {{ __('Sign Out') }}</a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </div><!-- dropdown-menu -->
        </div>
      </div><!-- az-header-right -->
    </div><!-- container -->
  </div><!-- az-header -->

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">Hi, welcome back!</h2>
            <p class="az-dashboard-text">Your cancer management system dashboard.</p>
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

        <div class="az-dashboard-nav">
          <nav class="nav">
            <a class="nav-link active" data-toggle="tab" href="#">Overview</a>
            <a class="nav-link" data-toggle="tab" href="#">Audiences</a>
            <a class="nav-link" data-toggle="tab" href="#">Demographics</a>
            <a class="nav-link" data-toggle="tab" href="#">More</a>
          </nav>

          <nav class="nav">
            <a class="nav-link" href="#"><i class="far fa-save"></i> Save Report</a>
            <a class="nav-link" href="#"><i class="far fa-file-pdf"></i> Export to PDF</a>
            <a class="nav-link" href="#"><i class="far fa-envelope"></i>Send to Email</a>
            <a class="nav-link" href="#"><i class="fas fa-ellipsis-h"></i></a>
          </nav>
        </div>

        <div class="row row-sm mg-b-20">
          <div class="col-lg-7 ht-lg-100p">
            <div class="card card-dashboard-one">
              <div class="card-header">
                <div>
                  <h6 class="card-title">Cancer Reports at Aroi Health Centre III</h6>
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
                            <p>Total</p>
                          </div><!-- card-header -->
                        </div><!-- card -->
                      </div><!-- col -->
                  </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
          <div class="col-lg-5 mg-t-20 mg-lg-t-0">
            <div class="row row-sm">
              <div class="col-sm-6">
                <div class="card card-dashboard-two">
                  <div class="card-header pb-3">
                    <h6>33.50% <i class="icon ion-md-trending-up tx-success"></i> <small>18.02%</small></h6>
                    <p>Bounce Rate</p>
                  </div><!-- card-header -->
                </div><!-- card -->
              </div><!-- col -->
              <div class="col-sm-6 mg-t-20 mg-sm-t-0">
                <div class="card card-dashboard-two">
                  <div class="card-header pb-3">
                    <h6>86k <i class="icon ion-md-trending-down tx-danger"></i> <small>0.86%</small></h6>
                    <p>Total Users</p>
                  </div><!-- card-header -->
                </div><!-- card -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!--col -->
        </div><!-- row -->

        <div class="row row-sm mg-b-20">
          <div class="col-lg-4">
            <div class="card card-dashboard-pageviews">
              <div class="card-header">
                <h6 class="card-title">Cancer Reports by Type</h6>
                <p class="card-text">This report is based on 100% of sessions.</p>
              </div><!-- card-header -->
              <div class="card-body">
                <div class="az-list-item">
                  <div>
                    <h6>Lung Cancer</h6>
                    <span>/demo/admin/index.html</span>
                  </div>
                  <div>
                    <h6 class="tx-primary">7,755</h6>
                    <span>31.74% (-100.00%)</span>
                  </div>
                </div><!-- list-group-item -->
                <div class="az-list-item">
                  <div>
                    <h6>Breast Cancer</h6>
                    <span>/demo/admin/forms.html</span>
                  </div>
                  <div>
                    <h6 class="tx-primary">5,215</h6>
                    <span>28.53% (-100.00%)</span>
                  </div>
                </div><!-- list-group-item -->
                <div class="az-list-item">
                  <div>
                    <h6>Skin Cancer</h6>
                    <span>/demo/admin/util.html</span>
                  </div>
                  <div>
                    <h6 class="tx-primary">4,848</h6>
                    <span>25.35% (-100.00%)</span>
                  </div>
                </div><!-- list-group-item -->
                <div class="az-list-item">
                  <div>
                    <h6>Cervical Cancer</h6>
                    <span>/demo/admin/validation.html</span>
                  </div>
                  <div>
                    <h6 class="tx-primary">3,275</h6>
                    <span>23.17% (-100.00%)</span>
                  </div>
                </div><!-- list-group-item -->
                <div class="az-list-item">
                  <div>
                    <h6>Prostate Cancer</h6>
                    <span>/demo/admin/modals.html</span>
                  </div>
                  <div>
                    <h6 class="tx-primary">3,003</h6>
                    <span>22.21% (-100.00%)</span>
                  </div>
                </div><!-- list-group-item -->
              </div><!-- card-body -->
            </div><!-- card -->

          </div><!-- col -->
          <div class="col-lg-8 mg-t-20 mg-lg-t-0">
            <div class="card card-dashboard-four">
              <div class="card-header">
                <h6 class="card-title text-center">Effects By Gender</h6>
              </div><!-- card-header -->
              <div class="card-body row">
                <div class="col-md-6 col-lg-5 mg-lg-r-auto mg-t-20 mg-md-t-0">
                    <h6 class="text-center">Male</h6>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Lukeamia</span>
                        <span>1,320 <span>(25%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-purple wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Lung Cancer</span>
                        <span>987 <span>(20%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-primary wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Breast Cancer</span>
                        <span>2,010 <span>(30%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-info wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Prostate Cancer</span>
                        <span>654 <span>(15%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-teal wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                    <div class="az-traffic-detail-item">
                      <div>
                        <span>Other</span>
                        <span>400 <span>(10%)</span></span>
                      </div>
                      <div class="progress">
                        <div class="progress-bar bg-gray-500 wd-10p" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                      </div><!-- progress -->
                    </div>
                  </div><!-- col -->
                <div class="col-md-6 col-lg-5 mg-lg-l-auto mg-t-20 mg-md-t-0">
                    <h6 class="text-center">Female</h6>
                     <div class="az-traffic-detail-item">
                        <div>
                          <span>Lukeamia</span>
                          <span>1,320 <span>(25%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-purple wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                      <div class="az-traffic-detail-item">
                        <div>
                          <span>Lung Cancer</span>
                          <span>987 <span>(20%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-primary wd-20p" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                      <div class="az-traffic-detail-item">
                        <div>
                          <span>Breast Cancer</span>
                          <span>2,010 <span>(30%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-info wd-30p" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                      <div class="az-traffic-detail-item">
                        <div>
                          <span>Prostate Cancer</span>
                          <span>654 <span>(15%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-teal wd-15p" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                      <div class="az-traffic-detail-item">
                        <div>
                          <span>Other</span>
                          <span>400 <span>(10%)</span></span>
                        </div>
                        <div class="progress">
                          <div class="progress-bar bg-gray-500 wd-10p" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div><!-- progress -->
                      </div>
                </div><!-- col -->
              </div><!-- card-body -->
            </div><!-- card-dashboard-four -->
          </div><!-- col -->
        </div><!-- row -->

        <div class="row row-sm mg-b-20 mg-lg-b-0">
          <div class="col-lg-12 col-xl-12 mg-t-20 mg-lg-t-0">
            <div class="card card-table-one">
              <h6 class="card-title">Report by Location</h6>
              <p class="az-content-text mg-b-20">Part of this date range occurs before the new users metric had been calculated, so the old users metric is displayed.</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="wd-5p">&nbsp;</th>
                      <th class="wd-45p">Village</th>
                      <th>Parish</th>
                      <th>Subcounty</th>
                      <th>Percentage</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>#</td>
                      <td><strong>Ombeteni</strong></td>
                      <td>Pajulu</td>
                      <td>Pajulu</td>
                      <td>15.47%</td>
                    </tr>
                    <tr>
                        <td>#</td>
                        <td><strong>Ombeteni</strong></td>
                        <td>Pajulu</td>
                        <td>Pajulu</td>
                        <td>15.47%</td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td><strong>Ombeteni</strong></td>
                        <td>Pajulu</td>
                        <td>Pajulu</td>
                        <td>15.47%</td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td><strong>Ombeteni</strong></td>
                        <td>Pajulu</td>
                        <td>Pajulu</td>
                        <td>15.47%</td>
                      </tr>
                      <tr>
                        <td>#</td>
                        <td><strong>Ombeteni</strong></td>
                        <td>Pajulu</td>
                        <td>Pajulu</td>
                        <td>15.47%</td>
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

  <div class="az-footer ht-40">
    <div class="container ht-100p pd-t-0-f">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © CMS {{ date('Y') }}. All Rights Reserved</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://muni.ac.ug" target="_blank">Muni University</span>
    </div><!-- container -->
  </div><!-- az-footer -->

  @endsection
