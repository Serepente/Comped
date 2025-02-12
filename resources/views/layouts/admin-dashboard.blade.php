<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin - @yield('title')</title>
    @vite(['resources/css/external-libs.css'])
    @vite(['resources/css/admin/admin-dashboard.css'])


</head>

<body class="dashboard-body">
    <div class="d-flex flex-wrap">
        @include('admin.components.sidebar')
    </div>
    <div class="content-wrapper flex-grow-1 container-fluid">
        <div class="main-content">
            @include('admin.components.searchbar')
            @yield('admin-content')

        </div>

        @include('admin.components.right-sidebar')
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/app.js'])
</body>

</html>
