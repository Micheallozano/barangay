<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Barangay Development Plan Information System">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="MERRX">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Login | {{config('app.name')}}</title>
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('assets/images/Logo.png') }}">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}">
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/font-awesome.min.css') }}">
        <!-- Lineawesome CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/line-awesome.min.css') }}">
        <!-- Select2 CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/select2.min.css') }}">
        <!-- Datetimepicker CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap-datetimepicker.min.css') }}">

		<!-- Main CSS -->
        <link rel="stylesheet" href="{{ URL::to('assets/css/style.css') }}">
        {{-- message toastr --}}
        <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
        <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>
    </head>
    <body class="account-page error-page">
        <style> 
        body {
            /* Set the background image URL and other properties */
            background: url('assets/images/78792.jpg') no-repeat center center fixed;
            background-size: cover;
        }
            .invalid-feedback{
                font-size: 14px;
            style

            }
        </style>
		<!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="account-content">
                
                <div class="container">
                    <!-- Account Logo -->
                    <div class="account-logo">
                    <a><img src="{{ URL::to('assets/images/Logo1.jpg') }}" alt="BDPIS" ></a>
                        <h2  class="title" style="font-weight:bolder; 
                        text-transform:uppercase; font-family: 'Calibri', Times, serif; color : gray"
                         alt="BDPIS" >  Barangay San Francisco</h2>
                         <h2  class="title" style="font-weight:bolder; 
                        text-transform:uppercase; font-family: 'Calibri', Times, serif; color : gray"
                         alt="BDPIS" >      Magarao, Camarines Sur</h2>
                        
                    {{-- message --}}
                    {!! Toastr::message() !!}
                    <!-- /Account Logo -->
                    <div class="account-box">
                        <div class="account-wrapper">
                            <!-- Account Form -->
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Username">
                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                        </div>
                                    </div>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="checkbox icheck">
                                        <label>
                                            <input type="checkbox" name="remember" value="1"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary account-btn" type="submit" style="font-weight:bolder; 
                                    text-transform:uppercase; font-family: 'Calibri', Times, serif; color : White">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->
		<!-- jQuery -->
        <script src="{{ URL::to('assets/js/jquery-3.5.1.min.js') }}"></script>
		<!-- Bootstrap Core JS -->
        <script src="{{ URL::to('assets/js/popper.min.js') }}"></script>
        <script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>
        <!-- Slimscroll JS -->
		<script src="{{ URL::to('assets/js/jquery.slimscroll.min.js') }}"></script>
		<!-- Select2 JS -->
		<script src="{{ URL::to('assets/js/select2.min.js') }}"></script>
		<!-- Datetimepicker JS -->
		<script src="{{ URL::to('assets/js/moment.min.js') }}"></script>
		<script src="{{ URL::to('assets/js/bootstrap-datetimepicker.min.js') }}"></script>
		<!-- Custom JS -->
		<script src="{{ URL::to('assets/js/app.js') }}"></script>
        <script>
		    document.addEventListener('contextmenu', event => event.preventDefault());
		</script>
        @yield('script')
    </body>
</html> 