<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from templates.iqonic.design/datum/laravel/public/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 03:10:11 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="5byoTtf2zpefU31rDuoemt3VnackypMvlNHwduMg">

    <title>Datum</title>

    <link rel="shortcut icon" href="{{ asset('assets/auth/images/favicon.ico') }}" />

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&amp;display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/auth/css/backend.css') }}">



</head>

<body class=" ">

    <div class="wrapper">
        <section class="login-content">
            <div class="container h-100">
                <div class="row align-items-center justify-content-center h-100">
                    <div class="col-md-5">
                        <div class="card p-3">
                            <div class="card-body">
                                <div class="auth-logo">
                                    <img src="{{ asset('assets/auth/images/logo.png') }}"
                                        class="img-fluid  rounded-normal  darkmode-logo" alt="logo">
                                    <img src="{{ asset('assets/auth/images/logo-dark.png') }}" alt="user-icon"
                                        class="img-fluid rounded-normal light-logo">
                                </div>
                                <h3 class="mb-3 font-weight-bold text-center">Masuk</h3>
                                <p class="text-center text-secondary mb-4">Silahkan login dengan akun yang telah pemerintah desa
                                    daftarkan</p>

                                <!-- Validation Errors -->
                                @csrf
                                <form id="login_form" method="POST" action="{{ route('login') }}"
                                    data-toggle="validator">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label class="text-secondary">NIK</label>
                                                <input id="nik" name="nik" value="{{ old('nik') }}"
                                                    class="form-control" type="number" placeholder="Masukkan NIK anda"
                                                    required autofocus>
                                                <div id="nik_error" class="error-message"></div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="form-group">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <label class="text-secondary">Password</label>
                                                </div>
                                                <input class="form-control" type="password" placeholder="Enter Password"
                                                    name="password" value="{{ old('password') }}" required
                                                    autocomplete="current-password">
                                                <div id="password_error" class="error-message"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-2">Masuk</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('assets/auth/js/backend-bundle.min.js') }}"></script>


    <!-- Flextree Javascript-->
    <script src="{{ asset('assets/auth/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('assets/auth/js/tree.js') }}"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('assets/auth/js/table-treeview.js') }}"></script>

    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('assets/auth/js/sweetalert.js') }}"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('assets/auth/js/vector-map-custom.js') }}"></script>

    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('assets/auth/js/customizer.js') }}"></script>

    <script src="{{ asset('assets/auth/vendor/Leaflet/leaflet.js') }}"></script>

    <script src="{{ asset('assets/auth/vendor/vanillajs-datepicker/dist/js/datepicker-full.js') }}""></script>

    <script src="{{ 'assets/auth/js/charts/progressbar.js' }}"></script>

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Handle form submission
        document.getElementById('login_form').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form submission

            // Clear previous error messages
            document.getElementById('nik_error').innerHTML = '';
            document.getElementById('password_error').innerHTML = '';

            // Send AJAX request to validate the form
            var xhr = new XMLHttpRequest();
            xhr.open('POST', this.action);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.alert === 'error') {
                        // Display error messages using SweetAlert
                        Swal.fire({
                            icon: 'error',
                            title: 'Validation Error',
                            text: response.message,
                        });
                    } else {
                        // Form submission successful, redirect to dashboard or desired page
                        window.location.href = 'dashboard';
                    }
                }
            };

            // Get form data
            var formData = new FormData(this);
            var encodedData = new URLSearchParams(formData).toString();

            // Send the request
            xhr.send(encodedData);
        });
    </script>
</body>
<!-- Mirrored from templates.iqonic.design/datum/laravel/public/auth/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Feb 2023 03:10:11 GMT -->

</html>
