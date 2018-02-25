<!DOCTYPE html>
<html lang="en" style="display: table; width: 100%; height: 100%;">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>Bravesoft | Login Administrator</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ asset('layout/css/login2.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('global/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('layout/css/themes/darkblue.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login" style="display: table-cell; vertical-align: middle">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="index.html">
        <img src="{{ asset('backend/img/logo.png') }}" alt="logo" class="logo-default" style="width: 150px;"/>
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" role="form" method="POST" action="{{ route('login.submit') }}">
        {{ csrf_field() }}
        <div class="form-title">
            <span class="form-title">Welcome.</span>
            <span class="form-subtitle">Please login.</span>
        </div>
        @if(Session::has('login_fail') || (!empty($errors) && count($errors) > 0))
            <div class="alert alert-danger display-hide" style="display: block;">
                <button class="close" data-close="alert"></button>
                <span>
			Enter any username and password. </span>
            </div>
        @endif
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="login_id" value="{{old('login_id')}}"/>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password"/>
        </div>
        <div class="form-actions">
            <button type="submit" class="btn btn-primary btn-block uppercase">Login</button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>

{{--<script src="{{ asset('backend/global/plugins/jquery.min.js') }}"></script>
<script src="{{ asset('backend/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('backend/global/plugins/uniform/jquery.uniform.min.js') }}"></script>
<script src="{{ asset('backend/global/scripts/metronic.js') }}"></script>
<script src="{{ asset('backend/layout/scripts/layout.js') }}"></script>
<script src="{{ asset('backend/layout/scripts/demo.js') }}"></script>
--}}{{--<script src="{{ asset('admin/layout/scripts/login.js') }}"></script>--}}{{--

<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
//		Login.init();
        Demo.init();
    });
</script>
<!-- END JAVASCRIPTS -->--}}
</body>
<!-- END BODY -->
</html>