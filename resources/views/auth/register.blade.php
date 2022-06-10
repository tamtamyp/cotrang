<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ setting('site_title', '') }} | Register</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('admin_templates/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_templates/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('admin_templates/css/style.css') }}">
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
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control form-control-lg"
                                        id="exampleInputUsername1" placeholder="Username"
                                        value="{{ old('username') ?? '' }}" required>
                                </div>
                                @error('username')
                                    <h6 class="font-weight-light" style="color:red;margin-top:10px">{{ $message }}</h6>
                                @enderror
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control form-control-lg"
                                        id="exampleInputEmail1" placeholder="Email" value="{{ old('email') ?? '' }}">
                                </div>
                                @error('email')
                                    <h6 class="font-weight-light" style="color:red;margin-top:10px">{{ $message }}
                                    </h6>
                                @enderror
                                {{-- <div class="form-group">
                                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                                        <option>Country</option>
                                        <option>United States of America</option>
                                        <option>United Kingdom</option>
                                        <option>India</option>
                                        <option>Germany</option>
                                        <option>Argentina</option>
                                    </select>
                                </div> --}}
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                @error('password')
                                    <h6 class="font-weight-light" style="color:red;margin-top:10px">{{ $message }}
                                    </h6>
                                @enderror
                                <div class="form-group">
                                    <input name="password_confirmation" type="password"
                                        class="form-control form-control-lg" id="exampleInputPassword1"
                                        placeholder="Password confirmation" required>
                                </div>
                                @error('password_confirmation')
                                    <h6 class="font-weight-light" style="color:red;margin-top:10px">{{ $message }}
                                    </h6>
                                @enderror
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" name="checkbox" class="form-check-input"
                                                id="checkbox" onclick="check();"
                                                {{ old('checkbox') == 'on' ? 'checked' : '' }}> I agree to all Terms
                                            &
                                            Conditions </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    {{-- <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        href="../../index.html">SIGN UP</a> --}}
                                    <input id='btn_signup' name='btn_signup' type='submit'
                                        class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn"
                                        value='{{ __('SIGN UP') }}' disabled>
                                </div>
                                <div class="text-center mt-4 font-weight-light"> Already have an account? <a
                                        href="{{ route('login') }}" class="text-primary">Login</a>
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
    <script src="{{ asset('admin_templates/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('admin_templates/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin_templates/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin_templates/js/misc.js') }}"></script>
    <script src="{{ asset('admin_templates/js/main.js') }}"></script>
    <!-- endinject -->
</body>

</html>
