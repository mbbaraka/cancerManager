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
                        <a class="nav-link" data-toggle="tab" href="#">Patient Surgical History</a>
                        <a class="nav-link" data-toggle="tab" href="#">Diagnosis</a>
                        <a class="nav-link" data-toggle="tab" href="#">Medical History</a>
                        <a class="nav-link" href="#"><i class="far fa-save"></i> Surgical History</a>
                        <a class="nav-link" href="#"><i class="far fa-file-pdf"></i> Social History</a>
                        <a class="nav-link active" href="#"><i class="far fa-envelope"></i>Finish</a>
                    </nav>

                    <nav class="nav">
                    </nav>
                </div><!-- card-header -->
              <div class="card-body p-3">
                <h3 class="text-center">Patient Registration Summery</h3>
                    <div class="row row-sm p-3 justify-content-center">

                        <table class="col-md-11 table table-responsive-sm">
                            <tr><td colspan="4"><h4>Patient Particulars</h4></td></tr>
                            <tr>
                                <td>Patient Name: </td>
                                <td>{{ $pat->name }}</td>
                                <td>Date of Birth: </td>
                                <td>{{ $pat->date_of_birth }}</td>
                            </tr>
                            <tr>
                                <td>Gender: </td>
                                <td>
                                    @if ($pat->gender == "m")
                                        {{ "Male" }}
                                    @elseif ($pat->gender == "f")
                                        {{ "Female" }}
                                    @endif
                                </td>
                                <td>Village: </td>
                                <td>{{ $pat->village }}</td>
                            </tr>
                            <tr>
                                <td>Sub County: </td>
                                <td>{{ $pat->sub_county }}</td>
                                <td>Phone Number: </td>
                                <td>{{ $pat->phone }}</td>
                            </tr>
                            <tr>
                                <td>Next Of Kin: </td>
                                <td>{{ $pat->next_of_kin }}</td>
                                <td>Next of Kin Phone Number: </td>
                                <td>{{ $pat->next_of_kin_phone }}</td>
                            </tr>

                            <tr><td colspan="4"><h4>Patient Diagnosis</h4></td></tr>
                            <tr>
                                <td>Status: </td>
                                <td>{{ $diag->status }}</td>
                                <td>Type: </td>
                                <td>{{ $diag->type }}</td>
                            </tr>
                            <tr>
                                <td>Stage: </td>
                                <td>{{ $diag->stage }}</td>
                                <td>Treatment: </td>
                                <td>{{ $diag->treatment }}</td>
                            </tr>
                            <tr>
                                <td>Description: </td>
                                <td>{{ $diag->description }}</td>
                                <td>Attachments: </td>
                                <td>{{ $diag->attachments }}</td>
                            </tr>

                            <tr><td colspan="4"><h4>Medical History</h4></td></tr>
                            <tr>
                                <td>Diseases:</td>
                                <td>
                                    @foreach ($history as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr><td colspan="4"><h4>Surgical History</h4></td></tr>
                            @foreach ($surgical as $item)
                            <tr>
                                <td>Type: </td>
                                <td>{{ $item->type }}</td>
                                <td>Year: </td>
                                <td>{{ $item->year }}</td>
                            </tr>
                            @endforeach

                            <tr><td colspan="4"><h4>Medical History</h4></td></tr>
                            <tr>
                                <td>Marital Status: </td>
                                <td>{{ $social->marital_status }}</td>
                                <td>Tobbaco Use: </td>
                                <td>{{ $social->tobaco_use }}</td>
                            </tr>
                            <tr>
                                <td>Duration of Use: </td>
                                <td>{{ $social->duration_of_use }}</td>
                                <td>Packs Per Day: </td>
                                <td>{{ $social->packs_per_day }}</td>
                            </tr>
                            <tr>
                                <td>Alcohol Use: </td>
                                <td>{{ $social->alcohol_use }}</td>
                                <td>Bottlers Per Day: </td>
                                <td>{{ $social->bottles_per_day }}</td>
                            </tr>
                        </table>
                    </div><!-- row -->


                    <br>
                    <div class="row row-xs ml-5 wd-xl-80p justify-content-between">
                        <div class="col-sm-6 col-md-3"><a href="#" class="btn btn-danger btn-with-icon btn-block"><i class="typcn typcn-delete"></i> No, Delete Patient</a></div>
                        <div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><a href="{{ route('patient-index') }}" class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Finish</a></div>
                    </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- az-content-body -->
    </div>
  </div><!-- az-content -->

  @include('partials.footer')
  @endsection
