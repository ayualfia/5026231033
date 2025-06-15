<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ayu Alfia Putri : 5026231033</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <style>
    <style>
        body {
            background-color: #fff7f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .jumbotron {
            background: linear-gradient(to right, #c6354d, #e88c9c 50%, #c6354d);
            color: #fffafc;
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(220, 53, 69, 0.2);
            border-bottom-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
        }

        .jumbotron h1 {
            font-family: 'Georgia', serif;
            font-weight: bold;
            font-size: 2.2rem;
            text-shadow: 1px 1px 4px rgba(255, 255, 255, 0.6);
        }

        .navbar {
            background-color: #fff0f5;
        }

        .navbar-nav .nav-link {
            color: #dc3545 !important;
            font-weight: 500;
        }

        .navbar-nav .nav-link:hover {
            background-color: #ffe4ec;
            border-radius: 8px;
        }

        .task-card {
            background-color: #fce4f3;
            border: none;
            border-radius: 1rem;
            transition: 0.3s;
        }

        .task-card:hover {
            transform: scale(1.02);
            box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.2);
        }

        .btn-custom {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 0.75rem;
            padding: 0.5rem 1rem;
            font-weight: 500;
        }

        .btn-custom:hover {
            background-color: #c82333;
            color: #fff;
        }

        .about-box {
            background-color: #ffe4ec;
            border-left: 6px solid #dc3545;
            padding: 1rem 1.25rem;
            border-radius: 1rem;
            margin-bottom: 1rem;
        }

        h1 {
            font-family: 'Georgia', serif;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>5026231033 : Ayu Alfia Putri</h1>
    </div>

    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/frontend">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/penghapus">Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keranjangbelanja">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan2">Latihan 3</a>
            </li>
        </ul>
    </nav>

    <br>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
