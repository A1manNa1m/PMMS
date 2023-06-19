<!-- <!DOCTYPE html>
<html>
<head>
    <title>PMMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .nav-link {
            font-size: 23px; /* Adjust the font size as needed */
        }
        
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        
        .site-content {
            flex: 1 0 auto; /* Allow the content to grow but not shrink */
        }

        footer {
            height: 60px; /* Adjust this value based on the desired height of your footer */
            background-color: #00a69c;
            color: white;
            text-align: center;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg" style="background-color: #00a69c;">
        <div class="container-fluid">
            <img src="{{ asset('images/petakom.png') }}" alt="Logo" style="width: 90px; height: 80px;">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item mx-5">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="#">Schedule</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="#">Inventory</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="#">Payment</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="/reportdata">Report</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link active font-weight-bold" aria-current="page" href="/vendordata">Vendor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="site-content">
        <section>
            <div class="container">
                <br>
                @yield('content')
            </div>
        </section>
    </div>
    <br>
    <footer>
        <div class="text-center text-black" style="background-color: #00a69c;">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright: PETAKOM UMP
            </div>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html> -->