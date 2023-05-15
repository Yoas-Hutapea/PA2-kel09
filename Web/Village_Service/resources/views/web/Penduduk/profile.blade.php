@extends('layouts.master')
@section('body')
    <div id="remoteModelData" class="modal fade" role="dialog"></div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="iq-edit-list usr-edit">
                                <ul class="iq-edit-profile d-flex nav nav-pills">
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link active" data-toggle="pill" href="#personal-information">
                                            Personal Information
                                        </a>
                                    </li>
                                    <li class="col-md-3 p-0">
                                        <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                                            Change Password
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="iq-edit-list-data">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Personal Information</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group row align-items-center">
                                                <div class="col-md-12">
                                                    <div class="profile-img-edit">
                                                        <div class="crm-profile-img-edit">
                                                            <img class="crm-profile-pic rounded-circle avatar-100"
                                                                src="{{asset('assets/auth/images/user/1.jpg')}}" alt="profile-pic">
                                                            <div class="crm-p-image bg-primary">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    fill="none" viewBox="0 0 24 24"
                                                                    stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                                </svg>
                                                                <input class="file-upload" type="file" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row align-items-center">
                                                <div class="form-group col-sm-6">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama"
                                                        value="{{ Auth::user()->nama}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="nik">NIK</label>
                                                    <input type="text" class="form-control" id="nik"
                                                        value="{{ Auth::user()->nik}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="no_telp">No Telepon</label>
                                                    <input type="text" class="form-control" id="no_telp"
                                                        value="{{ Auth::user()->no_telp}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                    <input type="text" class="form-control" id="tempat_lahir"
                                                        value="{{ Auth::user()->tempat_lahir}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                    <input type="text" class="form-control" id="tanggal_lahir"
                                                        value="{{ Auth::user()->tanggal_lahir}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="Usia">Usia</label>
                                                    <input text="text" class="form-control" id="usia" value="{{ Auth::user()->usia}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <input text="text" class="form-control" id="jenis_kelamin" value="{{ Auth::user()->jenis_kelamin}}" readonly>
                                                </div>
                                                {{-- <div class="form-group col-sm-6" @disabled(true)>
                                                    <label class="d-block">Jenis Kelamin</label>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio6" name="customRadio1"
                                                            class="custom-control-input" checked="">
                                                        <label class="custom-control-label" for="customRadio6"> Pria
                                                        </label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input type="radio" id="customRadio7" name="customRadio1"
                                                            class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio7"> Wanita
                                                        </label>
                                                    </div>
                                                </div> --}}
                                                <div class="form-group col-sm-6">
                                                    <label for="pekerjaan">Pekerjaan</label>
                                                    <input type="text" class="form-control" id="pekerjaan" value="{{ Auth::user()->pekerjaan}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="agama">Agama</label>
                                                    <input type="text" class="form-control" id="agama" value="{{ Auth::user()->agama}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="kk">No KK</label>
                                                    <input class="form-control" id="kk" value="{{ Auth::user()->kk}}" readonly>
                                                </div>
                                                <div class="form-group col-sm-12">
                                                    <label>Alamat</label>
                                                    <textarea class="form-control" name="address" rows="5" style="line-height: 22px;" readonly> {{ Auth::user()->alamat }}</textarea>
                                                </div>
                                            </div>
                                            {{-- <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button> --}}
                                            <a href="{{route('penduduk.update')}}"><button type="submit" class="btn btn-primary">Ubah Data</button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-between">
                                        <div class="header-title">
                                            <h4 class="card-title">Change Password</h4>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-group">
                                                <label for="cpass">Current Password:</label>
                                                <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                                <input type="Password" class="form-control" id="cpass"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="npass">New Password:</label>
                                                <input type="Password" class="form-control" id="npass"
                                                    value="">
                                            </div>
                                            <div class="form-group">
                                                <label for="vpass">Verify Password:</label>
                                                <input type="Password" class="form-control" id="vpass"
                                                    value="">
                                            </div>
                                            {{-- <button type="reset" class="btn btn-outline-primary mr-2">Cancel</button> --}}
                                            <a href="{{route('penduduk.update')}}"><button type="button" class="btn btn-primary">Ubah Data</button></a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('assets/auth/js/backend-bundle.min.js') }}"></script>

    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/auth/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/auth/js/tree.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ 'assets/auth/js/table-treeview.js' }}"></script>

    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/auth/js/sweetalert.js') }}"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('assets/auth/js/vector-map-custom.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/auth/js/customizer.js') }}"></script>

    <script src="{{ asset('assets/auth/vendor/Leaflet/leaflet.js') }}"></script>

    <script src="{{ asset('assets/auth/vendor/vanillajs-datepicker/dist/js/datepicker-full.js') }}"></script>

    <script src="{{ asset('assets/auth/js/charts/progressbar.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/auth/js/chart-custom.js') }}"></script>
    <script src="{{ asset('assets/auth/js/charts/01.js') }}"></script>
    <script src="{{ asset('assets/auth/js/charts/02.js') }}"></script>

    <!-- slider JavaScript -->
    <script src="{{ asset('assets/auth/js/slider.js') }}"></script>

    <!-- Emoji picker -->
    <script src="{{asset('assets/auth/vendor/emoji-picker-element/index.js')}}" type="module"></script>
    <!-- app JavaScript -->
    <script src="{{ asset('assets/auth/js/app.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            $(document).ready(function() {
                $('.select2js').select2();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(document).on('click', '.loadRemoteModel', function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');

                    if (url.indexOf('#') == 0) {
                        $(url).modal('open');
                    } else {
                        $.get(url, function(data) {
                            $('#remoteModelData').html(data);
                            $('#remoteModelData').modal();
                            $('form').validator();
                            $(".datepicker").flatpickr({
                                dateFormat: "d-m-Y"
                            });
                        });
                    }
                });

                $(document).on('click', '[data-form="ajax"]', function(f) {
                    $('form').validator('update');
                    f.preventDefault();
                    var current = $(this);
                    current.addClass('disabled');
                    var form = $(this).closest('form');
                    var url = form.attr('action');
                    var fd = new FormData(form[0]);

                    $.ajax({
                        type: "POST",
                        url: url,
                        data: fd, // serializes the form's elements.
                        success: function(e) {
                            if (e.status == true) {
                                if (e.event == "submited") {
                                    showMessage(e.message);
                                    $(".modal").modal('hide');
                                }
                                if (e.event == 'refresh') {
                                    // showMessage(e.message);
                                    window.location.reload();
                                }
                                if (e.event == "callback") {
                                    showMessage(e.message);
                                    $(".modal").modal('hide');
                                    location.reload();
                                }
                            }
                            if (e.status == false) {
                                if (e.event == 'validation') {
                                    errorMessage(e.message);
                                }
                            }
                        },
                        error: function(error) {

                        },
                        cache: false,
                        contentType: false,
                        processData: false,
                    });
                    f.preventDefault(); // avoid to execute the actual submit of the form.

                });

                $(document).ready(function() {

                    $(document).on('change', '.change_status', function() {

                        var status = $(this).prop('checked') == true ? 1 : 0;
                        console.log(status)
                        var id = $(this).attr('data-id');
                        var type = $(this).attr('data-type');
                        $.ajax({
                            type: "GET",
                            dataType: "json",
                            url: "https://templates.iqonic.design/datum/laravel/public/changeStatus",
                            data: {
                                'status': status,
                                'id': id,
                                'type': type
                            },
                            success: function(data) {
                                alert(data.message);
                            }
                        });
                    })
                })

                $(document).on('click', '[data-toggle="tabajax"]', function(e) {
                    e.preventDefault();
                    var selectDiv = this;
                    ajaxMethodCall(selectDiv);
                });

                function ajaxMethodCall(selectDiv) {

                    var $this = $(selectDiv),
                        loadurl = $this.attr('data-href'),
                        targ = $this.attr('data-target'),
                        id = selectDiv.id || '';

                    $.post(loadurl, function(data) {
                        $(targ).html(data);
                        $('form').append('<input type="hidden" name="active_tab" value="' + id +
                            '" />');
                    });

                    $this.tab('show');
                    return false;
                }

                $('form[data-toggle="validator"]').on('submit', function(e) {
                    window.setTimeout(function() {
                        var errors = $('.has-error')
                        if (errors.length) {
                            $('html, body').animate({
                                scrollTop: "0"
                            }, 500);
                            e.preventDefault()
                        }
                    }, 0);
                });
            });
        })(jQuery);
    </script>
@endsection
