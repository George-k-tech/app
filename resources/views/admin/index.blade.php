<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashbord</title>


    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   
     <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/admin.css'])
</head>

<body>

    @include('admin.adminSideNav')

    <div class="main-content">

       @include('admin.adminTopNav')

        @include('admin.adminStats')

        
       @yield('content')
    </div>
</body>

</html>
