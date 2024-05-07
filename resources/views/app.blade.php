<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>.: MENU DIET PASIEN :.</title>
    <link rel="shortcut icon" type="image/x-icon" href="public/img/salad.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <script src="public/js/app.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>

<body>
    @yield('content')
    @include('modal')

    <footer class="text-light">
        &copy; 2022 IT Support, RSHBM.
    </footer>
</body>

</html>