@extends('layouts.app')

@section('content')

@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">Referred Patients</h2>
            <p class="az-dashboard-text">Add patients referred from Arua Referral Hospital to Uganda Cancer Institute.</p>
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

              <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                      <thead>
                        <tr>
                          <th>Patient ID</th>
                          <th>Name</th>
                          <th>Diagnosis</th>
                          <th>Status</th>
                          <th>Progress</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($referrals as $item)
                        @php
                            $patient = App\Models\Patient::find($item->pat_id);
                        @endphp
                            <tr>
                                <th>{{ $patient->patient_id }}</th>
                                <td>{{ $patient->name }}</td>
                                <td>{{ $patient->diagnosis->type }}</td>
                                <td>{{ $patient->diagnosis->status }}</td>
                                <td>
                                    @if ($item->progress=='normal')
                                        <span class="badge badge-primary">{{ $item->progress }}</span>
                                    @elseif ($item->progress=='critical')
                                        <span class="badge badge-danger">{{ $item->progress }}</span>
                                    @elseif ($item->progress=='cured')
                                        <span class="badge badge-success">{{ $item->progress }}</span>
                                    @elseif ($item->progress=='improving')
                                        <span class="badge badge-warning">{{ $item->progress }}</span>
                                    @elseif ($item->progress=='dead')
                                        <span class="badge badge-secondary">{{ $item->progress }}</span>
                                    @endif
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

