<!DOCTYPE html>
<meta charset=utf-8>
<meta name=viewport content="width=device-width, initial-scale=1.0">

<title>Đăng nhập</title>
<style>
    html,
    body,
    div,
    span,
    h2,
    h3,
    a,
    fieldset,
    form,
    label,
    legend {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    ::selection {
        background-color: #e13300;
        color: white;
    }

    ::-moz-selection {
        background-color: #e13300;
        color: white;
    }

    *,
    *:before,
    *:after {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
    }

    .clear-both {
        clear: both;
    }

    body {
        font: 13px/20px normal Helvetica, Arial, sans-serif;
    }

    .top-head {
        background-color: #fafafa;
        position: relative;
        height: 154px;
        border-bottom: 1px solid #dbdad7;
        margin-top: 0px;
        margin-bottom: 10px;
        padding: 2px;
    }

    .top-wrapper {
        width: 800px;
        margin: auto;
        overflow: auto;
    }

    .top-head .logo {
        width: 150px;
        height: 150px;
        -moz-border-radius: 100%;
        -webkit-border-radius: 100%;
        border-radius: 100%;
        float: left;
        background-repeat: no-repeat;
        background-image: url('logo.png');
        cursor: pointer;
    }

    .top-head .top-title {
        height: 150px;
        margin-left: 170px;
        padding-top: 20px;
    }

    .login {
        width: 520px;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
    }

    .text-right {
        margin-left: 13px;
    }

    .col-text {
        width: 30%;
        float: left;
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
        text-align: right;
        padding-top: 8px;
    }

    .col-input {
        width: 70%;
        float: left;
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 0px;
    }

    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
    }

    body {
        margin: 0;
    }

    a {
        background-color: transparent;
    }

    a:active,
    a:hover {
        outline: 0;
    }

    input {
        margin: 0;
        font: inherit;
    }

    input[type="submit"] {
        -webkit-appearance: button;
    }

    button::-moz-focus-inner,
    input::-moz-focus-inner {
        padding: 0;
        border: 0;
    }

    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    *:before,
    *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    html {
        font-size: 10px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    body {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
        background-color: #fff;
    }

    input {
        font-family: inherit;
    }

    a {
        color: #337ab7;
        text-decoration: none;
    }

    a:hover,
    a:focus {
        color: #23527c;
        text-decoration: underline;
    }

    a:focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
    }

    h2,
    h3 {
        font-family: inherit;
        font-weight: 500;
        line-height: 1.1;
        color: inherit;
    }

    h2,
    h3 {
        margin-top: 20px;
        margin-bottom: 10px;
    }

    h2 {
        font-size: 30px;
    }

    h3 {
        font-size: 24px;
    }

    .text-right {
        text-align: right;
    }

    .text-danger {
        color: #a94442;
    }

    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    @media (min-width: 768px) {
        .container {
            width: 750px;
        }
    }

    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }

    .row {
        margin-right: -15px;
        margin-left: -15px;
    }

    .col-sm-12 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (min-width: 768px) {
        .col-sm-12 {
            float: left;
        }

        .col-sm-12 {
            width: 100%;
        }
    }

    @media (min-width: 1200px) {
        .col-lg-12 {
            float: left;
        }

        .col-lg-12 {
            width: 100%;
        }
    }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0;
    }

    legend {
        display: block;
        width: 100%;
        padding: 0;
        margin-bottom: 20px;
        font-size: 21px;
        line-height: inherit;
        color: #333;
        border: 0;
        border-bottom: 1px solid #e5e5e5;
    }

    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-control {
        display: block;
        width: 100%;
        height: 34px;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: #555;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        -webkit-transition: border-color ease-in-out 0.15s,
            -webkit-box-shadow ease-in-out 0.15s;
        -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
    }

    .form-control:focus {
        border-color: #66afe9;
        outline: 0;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
            0 0 8px rgba(102, 175, 233, 0.6);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
            0 0 8px rgba(102, 175, 233, 0.6);
    }

    .form-control::-moz-placeholder {
        color: #999;
        opacity: 1;
    }

    .form-control::-webkit-input-placeholder {
        color: #999;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .btn {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .btn:focus,
    .btn:active:focus,
    .btn.active:focus,
    .btn.focus,
    .btn:active.focus,
    .btn.active.focus {
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
    }

    .btn:hover,
    .btn:focus,
    .btn.focus {
        color: #333;
        text-decoration: none;
    }

    .btn:active,
    .btn.active {
        background-image: none;
        outline: 0;
        -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    }

    .btn.disabled {
        cursor: not-allowed;
        -webkit-box-shadow: none;
        box-shadow: none;
        opacity: 0.65;
    }

    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #286090;
        border-color: #122b40;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #286090;
        border-color: #204d74;
    }

    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        color: #fff;
        background-color: #286090;
        border-color: #204d74;
    }

    .btn-primary:active:hover,
    .btn-primary.active:hover,
    .open>.dropdown-toggle.btn-primary:hover,
    .btn-primary:active:focus,
    .btn-primary.active:focus,
    .open>.dropdown-toggle.btn-primary:focus,
    .btn-primary:active.focus,
    .btn-primary.active.focus,
    .open>.dropdown-toggle.btn-primary.focus {
        color: #fff;
        background-color: #204d74;
        border-color: #122b40;
    }

    .btn-primary:active,
    .btn-primary.active,
    .open>.dropdown-toggle.btn-primary {
        background-image: none;
    }

    .btn-primary.disabled:hover,
    .btn-primary[disabled]:hover,
    fieldset[disabled] .btn-primary:hover,
    .btn-primary.disabled:focus,
    .btn-primary[disabled]:focus,
    fieldset[disabled] .btn-primary:focus,
    .btn-primary.disabled.focus,
    .btn-primary[disabled].focus,
    fieldset[disabled] .btn-primary.focus {
        background-color: #337ab7;
        border-color: #2e6da4;
    }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }

        to {
            background-position: 0 0;
        }
    }

    @-o-keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }

        to {
            background-position: 0 0;
        }
    }

    @keyframes progress-bar-stripes {
        from {
            background-position: 40px 0;
        }

        to {
            background-position: 0 0;
        }
    }

    .well {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;
        background-color: #f5f5f5;
        border: 1px solid #e3e3e3;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
    }

    .clearfix:before,
    .clearfix:after,
    .dl-horizontal dd:before,
    .dl-horizontal dd:after,
    .container:before,
    .container:after,
    .container-fluid:before,
    .container-fluid:after,
    .row:before,
    .row:after,
    .form-horizontal .form-group:before,
    .form-horizontal .form-group:after,
    .btn-toolbar:before,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:before,
    .btn-group-vertical>.btn-group:after,
    .nav:before,
    .nav:after,
    .navbar:before,
    .navbar:after,
    .navbar-header:before,
    .navbar-header:after,
    .navbar-collapse:before,
    .navbar-collapse:after,
    .pager:before,
    .pager:after,
    .panel-body:before,
    .panel-body:after,
    .modal-header:before,
    .modal-header:after,
    .modal-footer:before,
    .modal-footer:after {
        display: table;
        content: " ";
    }

    .clearfix:after,
    .dl-horizontal dd:after,
    .container:after,
    .container-fluid:after,
    .row:after,
    .form-horizontal .form-group:after,
    .btn-toolbar:after,
    .btn-group-vertical>.btn-group:after,
    .nav:after,
    .navbar:after,
    .navbar-header:after,
    .navbar-collapse:after,
    .pager:after,
    .panel-body:after,
    .modal-header:after,
    .modal-footer:after {
        clear: both;
    }

    @-ms-viewport {
        width: device-width;
    }

</style>
<link rel="shortcut icon" type=image/png
    href="{{asset('images/favicon.ico')}}">
<style>
    .sf-hidden {
        display: none !important
    }

</style>
<link rel=canonical href=https://localhost/orm/sucohoatdong/dang-nhap>
<meta http-equiv=content-security-policy
    content="default-src 'none'; font-src 'self' data:; img-src 'self' data:; style-src 'unsafe-inline'; media-src 'self' data:; script-src 'unsafe-inline' data:;">
<style>
    img[src="data:,"],
    source[src="data:,"] {
        display: none !important
    }

</style>
</head>

<body>
    <div id='top' class='top-head'>
        <div class="top-wrapper clear-both">
            <a class='logo' href="{{ asset('logo.png') }}"></a>
            <div class='top-title'>
                <h2>RISK MANAGEMENT SYSTEM</h2>

                <h3>Khối Quản Lý Rủi Ro</h3>
            </div>
        </div>
    </div>
    <div class='container'>
        <div class='row' style='font-size:13px'>
            <div class='login'>
                <div class='well'>
                    <div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <fieldset>
                                <legend>Đăng nhập</legend>
                                <div class='form-group'>
                                    <div class="row colbox">
                                        <div class='col-text'>
                                            <label for='username' class='control-label'>Tên đăng nhập</label>
                                        </div>
                                        <div class='col-input'>
                                            <input class='form-control input100 @error('username') is-invalid @enderror'
                                                id='autoFocus' name='username' placeholder='Username' type=text value
                                                autocomplete=off
                                                onfocus=" let value = this.value; this.value = null; this.value=value"
                                                autofocus value="{{ old('username') }}">
                                            <span class="focus-input100"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class="row colbox">
                                        <div class='col-text'>
                                            <label for='password' class='control-label'>Mật khẩu</label>
                                        </div>
                                        <div class='col-input'>
                                            <input type='password' class='form-control input100 @error('password') is-invalid @enderror' id='password' name='password'
                                                data-minlength='6' required placeholder='Password' value>
                                            <span class="focus-input100"></span>
                                            @error('username')
                                                <div class="invalid-feedback mt-2" style="margin-top:10px" role="alert">
                                                    <strong class="" style="color:red">{{ $message }}</strong>
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group'>
                                    <div class="col-lg-12 col-sm-12 text-right">
                                        <input id='btn_login' name='btn_login' type='submit'
                                            class="btn btn-primary" value='{{ __('Login') }}'>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade sf-hidden" id='dangkythanhcongModal' tabindex='-1' role='dialog'>
    </div>
    <div class="modal fade sf-hidden" id='loginErrorModal' tabindex='-1' role='dialog'>
    </div>
    <div class="modal fade sf-hidden" id='loginErrorModalAd' tabindex='-1' role='dialog'>
    </div>
</body>

</html>
