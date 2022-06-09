<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ setting('site_title', '') }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('adminTemplates/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminTemplates/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('adminTemplates/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ setting('site_favicon', '') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth">
                <div class="row flex-grow">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left p-5">
                            <div class="brand-logo">
                                <b style="font-size: 350%;
                  background: -webkit-linear-gradient(#da8cff, #9a55ff);
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                  text-transform: uppercase">{{ setting('site_title', '') }}</b>
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="username" name="username" class="form-control form-control-lg" id="exampleInputEmail1"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password">
                                </div>
                                @error('username')
                                    <div class="invalid-feedback mt-2" style="margin-top:10px" role="alert">
                                        <strong class="" style="color:red">{{ $message }}</strong>
                                    </div>
                                @enderror
                                <div class="mt-3">
                                    <input id='btn_login' name='btn_login' type='submit'
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        value='{{ __('LOGIN') }}'>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                {{-- <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                                </div> --}}
                                <div class="text-center mt-4 font-weight-light"> Don't have an account? <a
                                        href="{{ route('register') }}" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('adminTemplates/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('adminTemplates/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('adminTemplates/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('adminTemplates/assets/js/misc.js') }}"></script>
    <!-- endinject -->
</body>

</html>
