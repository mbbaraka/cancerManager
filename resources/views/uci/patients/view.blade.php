@extends('layouts.app')

@section('content')

@include('partials.uci.nav')

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
        <div class="az-dashboard-one-title">
          <div>
            <h2 class="az-dashboard-title">{{ Str::upper($patient->name) }}</h2>
            <p class="az-dashboard-text">Patient Profile</p>
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
                    <div class="row">
                        <h3 class="col-8">Patient Information Summery</h3>

                        <div class="col-4 justify-content-between"><a href="{{route('create-pdf', ['download'=>'pdf', $patient->patient_id])}}" class="btn btn-warning"><i class="fa fa-print"></i>Print to PDF</a><a class="btn btn-secondary" href="javascript: history.go(-1)"><span class="float-right fa fa-reply"> Back</span></a></div>
                    </div>
                    <div class="row row-sm p-3 justify-content-center">


                        <table class="col-md-12 table table-responsive-sm">
                            <tr><td colspan="4"><h4>Patient Particulars</h4></td></tr>
                            <tr>
                                <td>Patient Name: </td>
                                <td class="text-muted text-dark">{{ $patient->name }}</td>
                                <td>Date of Birth: </td>
                                <td class="text-muted text-dark">{{ $patient->date_of_birth }}</td>
                            </tr>
                            <tr>
                                <td>Gender: </td>
                                <td>
                                    @if ($patient->gender == "m")
                                        {{ "Male" }}
                                    @elseif ($patient->gender == "f")
                                        {{ "Female" }}
                                    @endif
                                </td>
                                <td>Village: </td>
                                <td cl>{{ $patient->village }}</td>
                            </tr>
                            <tr>
                                <td>Sub County: </td>
                                <td class="text-muted text-dark">{{ $patient->sub_county }}</td>
                                <td>Phone Number: </td>
                                <td class="text-muted text-dark">{{ $patient->phone }}</td>
                            </tr>
                            <tr>
                                <td>Next Of Kin: </td>
                                <td class="text-muted text-dark">{{ $patient->next_of_kin }}</td>
                                <td>Next of Kin Phone Number: </td>
                                <td class="text-muted text-dark">{{ $patient->next_of_kin_phone }}</td>
                            </tr>

                            <tr><td colspan="4"><h4>Patient Diagnosis</h4></td></tr>
                            <tr>
                                <td>Status: </td>
                                <td class="text-muted text-dark">{{ $diag->status }}</td>
                                <td>Type: </td>
                                <td class="text-muted text-dark">{{ $diag->type }}</td>
                            </tr>
                            <tr>
                                <td>Stage: </td>
                                <td class="text-muted text-dark">{{ $diag->stage }}</td>
                                <td>Treatment: </td>
                                <td class="text-muted text-dark">{{ $diag->treatment }}</td>
                            </tr>
                            <tr>
                                <td>Description: </td>
                                <td class="text-muted text-dark">{{ $diag->description }}</td>
                                <td>Attachments: </td>
                                <td class="text-muted text-dark"><a href="{{ Storage::url('attachments/'.$diag->attachments) }}" target="_blank">{{ $diag->attachments }}</a></td>
                            </tr>

                            <tr><td colspan="4"><h4>Medical History</h4></td></tr>
                            <tr>
                                <td>Diseases:</td>
                                <td>
                                    @foreach ($history as $item)
                                        <li>{{ str_replace(['[', ']', '"', ''], ' ', $item); }}</li>
                                    @endforeach
                                </td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr><td colspan="4"><h4>Surgical History</h4></td></tr>
                            @foreach ($surgical as $item)
                            <tr>
                                <td>Type: </td>
                                <td class="text-muted text-dark">{{ $item->type }}</td>
                                <td>Year: </td>
                                <td class="text-muted text-dark">{{ $item->year }}</td>
                            </tr>
                            @endforeach

                            <tr><td colspan="4"><h4>Medical History</h4></td></tr>
                            <tr>
                                <td>Marital Status: </td>
                                <td class="text-muted text-dark">{{ $social->marital_status }}</td>
                                <td>Tobbaco Use: </td>
                                <td class="text-muted text-dark">{{ $social->tobaco_use }}</td>
                            </tr>
                            <tr>
                                <td>Duration of Use: </td>
                                <td class="text-muted text-dark">{{ $social->duration_of_use }}</td>
                                <td>Packs Per Day: </td>
                                <td class="text-muted text-dark">{{ $social->packs_per_day }}</td>
                            </tr>
                            <tr>
                                <td>Alcohol Use: </td>
                                <td class="text-muted text-dark">{{ $social->alcohol_use }}</td>
                                <td>Bottlers Per Day: </td>
                                <td class="text-muted text-dark">{{ $social->bottles_per_day }}</td>
                            </tr>
                        </table>
                    </div><!-- row -->


                    <br>
                    <div class="row row-xs ml-5 wd-xl-80p justify-content-between">
                        <div class="col-sm-6 col-md-3"><a href="javascript: history.go(-1)" class="btn btn-danger btn-with-icon btn-block"><i class="typcn typcn-delete"></i> Go Back</a></div>
                        <div class="col-sm-6 col-md-4 mg-t-10 mg-md-t-0"><a data-toggle="modal" href="#{{ $patient->patient_id }}" class="btn btn-primary btn-with-icon btn-block"><i class="far fa-save"></i> Change Patient Progress</a></div>
                    </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->
          </div><!-- col -->
        </div><!-- row -->

      </div><!-- az-content-body -->
    </div>
  </div><!-- az-content -->

  <!-- Modal -->
  <div class="modal fade" id="{{ $patient->patient_id }}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Change Patient Status</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
              </div>
              <div class="modal-body">
                  <form action="{{ route('change.status') }}" method="post">
                      @csrf
                      <input type="hidden" name="id" value="{{ $patient->patient_id }}">
                      <select class="form-control" name="status" id="">
                          <option value="normal">Normal</option>
                          <option value="progressing">Progressing</option>
                          <option value="critical">Critical</option>
                          <option value="cured">Cured</option>
                          <option value="dead">Dead</option>
                      </select>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      </div>
  </div>
  @include('partials.footer')
  @endsection
