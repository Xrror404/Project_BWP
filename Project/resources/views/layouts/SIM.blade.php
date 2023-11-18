<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem ISTTS - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        header {
            background-color: #360000;
            color: white;
            padding: 20px;
        }

        .sidebar div {
            background-color: #360000;
            color: white;
            padding: 10px;
        }

        .sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #f0f0f0;
            padding-top: 20px;
        }

        /* Style the content area */
        .content {
            margin-left: 250px;
            /* Adjust according to the sidebar width */
            padding: 20px;
        }

        /* Style the sidebar links */
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        .sidebar ul li {
            margin-bottom: 10px;
        }

        .sidebar ul li a {
            text-decoration: none;
            color: #333;
        }

        .sidebar ul li a:hover {
            color: #360000;
        }
    </style>
</head>

<body>
    <!-- Include the content from sections -->
    @yield('header')

    <div class="sidebar">
        @yield('sidebar')
    </div>

    <div class="content">
        @yield('content')
    </div>

    <!-- Your JavaScript code -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
