@extends('layouts.app')

@section('content')

@include('partials.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">All Cancer Patient</h2>
            <p class="az-dashboard-text">A list of all cancer cases and suspects.</p>
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

                </div><!-- card-header -->
              <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                      <thead>
                        <tr class="thead-dark">
                          <th>S/n</th>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Cancer Type</th>
                          <th>Gender</th>
                          <th>Village</th>
                          <th>Subcounty</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($patients as $key => $item)
                            <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->diagnosis->status }}</td>
                            <td>{{ $item->diagnosis->type }}</td>
                            <td>{{ Str::ucfirst($item->gender) }}</td>
                            <td>{{ $item->village }}</td>
                            <td>{{ $item->sub_county }}</td>
                            <td>
                                <a class="btn btn-outline-light" href="{{ route('patient-single', $item->patient_id) }}">
                                    <span class="fa fa-eye" title="View"></span>
                                </a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#editModal{{ $item->patient_id }}">
                                  <span class="fa fa-edit" title="Edit"></span>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editModal{{ $item->patient_id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                                <div class="modal-header">
                                                        <h5 class="modal-title">Choose which Section to Edit</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                    </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <ul class="col-12">
                                                        <a class="list-group-item list-group-item-action" href="{{ route('new-patient-diagnosis', $item->patient_id) }}">Patient Diagnosis</a>
                                                        <a class="list-group-item list-group-item-action" href="{{ route('new-patient-medical-history', $item->patient_id) }}">Medical History</a>
                                                        <a class="list-group-item list-group-item-action" href="{{ route('new-patient-surgical-history', $item->patient_id) }}">Surgical History</a>
                                                        <a class="list-group-item list-group-item-action" href="{{ route('new-patient-social-history', $item->patient_id) }}">Social History</a>
                                                    </ul>
                                                </div>
                                            </div>
                                            {{--  <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>  --}}
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    $('#exampleModal').on('show.bs.modal', event => {
                                        var button = $(event.relatedTarget);
                                        var modal = $(this);
                                        // Use above variables to manipulate the DOM

                                    });
                                </script>
                            </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    {{ $patients->links() }}
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
