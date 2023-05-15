@extends('layouts/master')
@section('body')
    <div id="remoteModelData" class="modal fade" role="dialog"></div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Tambah Penduduk</h4>
                            </div>
                            <div class="header-action">
                                <i type="button" data-toggle="collapse" data-target="#form-element-1" aria-expanded="false"
                                    aria-controls="alert-1">
                                    <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="collapse" id="form-element-1">
                                <div class="card"><kbd class="bg-dark">
                                        <pre id="basic-form" class="text-white"><code>
                    &#x3C;form&#x3E;
                    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
                        &#x3C;label for=&#x22;nik&#x22;&#x3E;nik address:&#x3C;/label&#x3E;
                        &#x3C;input type=&#x22;nik&#x22; class=&#x22;form-control&#x22; id=&#x22;nik1&#x22;&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;div class=&#x22;form-group&#x22;&#x3E;
                        &#x3C;label for=&#x22;nama&#x22;&#x3E;Password:&#x3C;/label&#x3E;
                        &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;nama&#x22;&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;div class=&#x22;checkbox mb-3&#x22;&#x3E;
                        &#x3C;label&#x3E;&#x3C;input type=&#x22;checkbox&#x22;&#x3E; Remember me&#x3C;/label&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
                    &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
                    &#x3C;/form&#x3E;
                    </code></pre>
                                    </kbd></div>
                            </div>
                            <form method="POST" action="{{ route('create-penduduk') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="nik">NIK </label>
                                    <input type="text" name="nik" class="form-control" id="nik1">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama </label>
                                    <input type="text" name="nama" class="form-control" id="nama">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Password </label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <button type="submit" class="btn bg-danger">Cancel</button>
                            </form>
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
