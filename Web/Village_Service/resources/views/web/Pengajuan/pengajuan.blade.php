@extends('layouts.master')
@section('body')

<div id="remoteModelData" class="modal fade" role="dialog"></div>
    <div class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                        <div class="d-flex align-items-center justify-content-between">
                            <h4 class="font-weight-bold">Daftar Pengajuan</h4>
                        </div>
                        <div class="create-workform">
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="modal-product-search d-flex">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card card-block card-stretch">
                                <div class="card-body p-0">
                                    <div class="d-flex justify-content-between align-items-center p-3">
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table data-table mb-0">
                                            <thead class="table-color-heading">
                                                <tr class="">
                                                    <th scope="col" class="pr-0 w-01">
                                                        <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input m-0"
                                                                    id="customCheck1">
                                                                <label class="custom-control-label"
                                                                    for="customCheck1"></label>
                                                            </div>
                                                        </div>
                                                    </th>
                                                    <th scope="col">
                                                        Nama
                                                    </th>
                                                    <th scope="col">
                                                        Jenis Pengajuan
                                                    </th>
                                                    <th scope="col">
                                                        Deskripsi
                                                    </th>
                                                    <th scope="col" class="text-right">
                                                        File
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pengajuan as $index => $pengajuan)
                                                    <tr class="white-space-no-wrap">
                                                        <td class="pr-0 ">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input m-0"
                                                                    id="customCheck" value="{{ $index + 1  }}">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td class="pr-0 ">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input m-0"
                                                                    id="customCheck" value="{{ $user->user_name  }}">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td class="pr-0 ">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input m-0"
                                                                    id="customCheck" value="{{ $user->jenis_pengajuan  }}">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td class="pr-0 ">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input m-0"
                                                                    id="customCheck" value="{{ $user->deskripsi  }}">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        <td class="pr-0 ">
                                                            <div
                                                                class="custom-control custom-checkbox custom-control-inline">
                                                                <input type="checkbox" class="custom-control-input m-0"
                                                                    id="customCheck" value="{{ $user->file  }}">
                                                                <label class="custom-control-label"
                                                                    for="customCheck"></label>
                                                            </div>
                                                        </td>
                                                        
                                                        
                                                        
                                                        
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Daftar Penduduk</title>
</head>
<body>
    <h1>Daftar Penduduk</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Jenis Pengajuan</th>
                <th>Deskripsi</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pengajuan as $index => $pengajuan)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->user_name }}</td>
                <td>{{ $user->jenis_pengajuan }}</td>
                <td>{{ $user->deskripsi }}</td>
                <td>{{ $user->file }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> --}}
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
@endsection
