@extends('layouts.app')

@section('content')

@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">System Users</h2>
            <p class="az-dashboard-text">List of All Users of Cancer Management System</p>
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
                <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                      <thead>
                        <tr>
                          <th>First Name</th>
                          <th>Last Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $item)

                            <tr>
                                <th>{{ $item->first_name }}</th>
                                <td>{{ $item->last_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>
                                    <span><a href="#" onclick="confirm('Are you about this?')" class="btn btn-sm btn-danger"><small>Delete</small></a></span>
                                </td>
                              </tr>

                        @endforeach
                      </tbody>
                    </table>
                  </div>
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- az-content-body -->
    </div>
  </div><!-- az-content -->

  @include('partials.footer')

  @endsection

