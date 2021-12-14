<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Cancer Management System') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}') }}" defer></script>
    <!-- vendor css -->
    {{-- <link href="{{ asset('cancerManager/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/spectrum-colorpicker/spectrum.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/pickerjs/picker.min.css') }}" rel="stylesheet"> --}}

    <link href="{{ asset('cancerManager/lib/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/typicons.font/typicons.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/spectrum-colorpicker/spectrum.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/amazeui-datetimepicker/css/amazeui.datetimepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.css') }}" rel="stylesheet">
    <link href="{{ asset('cancerManager/lib/pickerjs/picker.min.css') }}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{ asset('cancerManager/css/azia.css') }}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="az-body">
        @include('sweetalert::alert')

        <main class="py-1">
            <div class="container p-3">
                <div>
                    <h3 class="text-center">Patient Information Summery</h3>
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
                            <td class="text-muted text-dark">{{ $diag->attachments }}</td>
                        </tr>

                        <tr><td colspan="4"><h4>Medical History</h4></td></tr>
                        <tr>
                            <td>Diseases:</td>
                            <td>
                                @foreach ($history as $item)
                                    <li>{{ str_replace(['[', ']', '"', ''], ' ', $item); }}</li>
                                @endforeach
                                {{--  {{ $history }}  --}}
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

          </div><!-- card-body -->
        </main>
    </div>
    <script src="{{ asset('cancerManager/lib/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/ionicons/ionicons.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/spectrum-colorpicker/spectrum.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/jquery-simple-datetimepicker/jquery.simple-dtpicker.js') }}"></script>
    <script src="{{ asset('cancerManager/lib/pickerjs/picker.min.js') }}"></script>
    <script src="{{ asset('cancerManager/js/cookie.js') }}" type="text/javascript"></script>

    <script src="{{ asset('cancerManager/js/azia.js') }}"></script>

    <script>
        // Additional code for adding placeholder in search box of select2
        (function($) {
          var Defaults = $.fn.select2.amd.require('select2/defaults');

          $.extend(Defaults.defaults, {
            searchInputPlaceholder: ''
          });

          var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

          var _renderSearchDropdown = SearchDropdown.prototype.render;

          SearchDropdown.prototype.render = function(decorated) {

            // invoke parent method
            var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

            this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

            return $rendered;
          };

        })(window.jQuery);
      </script>
      <script>
        $(function(){
          'use strict'

          // Toggle Switches
          $('.az-toggle').on('click', function(){
            $(this).toggleClass('on');
          })

          // Input Masks
          $('#dateMask').mask('99/99/9999');
          $('#phoneMask').mask('(999) 999-9999');
          $('#phoneExtMask').mask('(999) 999-9999? ext 99999');
          $('#ssnMask').mask('999-99-9999');

          // Color picker
          $('#colorpicker').spectrum({
            color: '#17A2B8'
          });

          $('#showAlpha').spectrum({
            color: 'rgba(23,162,184,0.5)',
            showAlpha: true
          });

          $('#showPaletteOnly').spectrum({
              showPaletteOnly: true,
              showPalette:true,
              color: '#DC3545',
              palette: [
                  ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                  ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
              ]
          });

          // Datepicker
          $('.fc-datepicker').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true
          });

          $('#datepickerNoOfMonths').datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            numberOfMonths: 2
          });

          // AmazeUI Datetimepicker
          $('#datetimepicker').datetimepicker({
            format: 'yyyy-mm-dd hh:ii',
            autoclose: true
          });

          // jQuery Simple DateTimePicker
          $('#datetimepicker2').appendDtpicker({
            closeOnSelected: true,
            onInit: function(handler) {
              var picker = handler.getPicker();
              $(picker).addClass('az-datetimepicker');
            }
          });

          new Picker(document.querySelector('#datetimepicker3'), {
            headers: true,
            format: 'MMMM DD, YYYY HH:mm',
            text: {
              title: 'Pick a Date and Time',
              year: 'Year',
              month: 'Month',
              day: 'Day',
              hour: 'Hour',
              minute: 'Minute'
            },
          });


          $(document).ready(function(){
            $('.select2').select2({
              placeholder: 'Choose one',
              searchInputPlaceholder: 'Search'
            });

            $('.select2-no-search').select2({
              minimumResultsForSearch: Infinity,
              placeholder: 'Choose one'
            });
          });

          $('.rangeslider1').ionRangeSlider();

          $('.rangeslider2').ionRangeSlider({
              min: 100,
              max: 1000,
              from: 550
          });

          $('.rangeslider3').ionRangeSlider({
              type: 'double',
              grid: true,
              min: 0,
              max: 1000,
              from: 200,
              to: 800,
              prefix: '$'
          });

          $('.rangeslider4').ionRangeSlider({
              type: 'double',
              grid: true,
              min: -1000,
              max: 1000,
              from: -500,
              to: 500,
              step: 250
          });

        });
      </script>
</body>
</html>
