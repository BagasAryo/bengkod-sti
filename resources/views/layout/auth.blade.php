<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'HEALTH MANAGEMEN APP')</title>
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
      integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI="
      crossorigin="anonymous"
    />
</head>
<body class="login-page bg-body-secondary">
    <div class="login-box">
        <div class="login-logo">
            <a href="/auth/register"><b>Health</b> Management</a>
        </div>
        <div class="card card-success">
            <div class="card-header">
                <div class="card-title">@yield('card-title')</div>
            </div>
            <!--begin::Body-->
            <div class="card-body login-card-body">
                @yield('content')
            </div>
            <!--end::Body-->
        </div>
    </div>
</body>
</html>