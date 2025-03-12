<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            padding: 15px 30px;
            border-bottom: 2px solid #353434;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: white;
            margin-top: 15px;
        }

        .navbar .container {
            margin-bottom: 15px;
            justify-content: space-between;
            align-items: center;
            max-width: 650px;
        }

        .nav-kiri,
        .nav-kanan {
            display: flex;
            align-items: center;
            gap: 40px;
        }

        .nav-kiri a,
        .nav-kanan a {
            font-weight: 500;
            color: #353434;
            text-decoration: none;
        }

        .nav-kanan .su-btn {
            background-color: #353434;
            color: #ffffff;
            padding: 8px 12px;
            border-radius: 5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .nav-kiri,
            .nav-kanan {
                flex-direction: column;
                gap: 10px;
            }

            .nav-kanan .su-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-kiri">
                <a href="\">HOME</a>
                <a href="#admin">ADMIN</a>
            </div>
            <a href="#">
                <img src="{{ asset('img/logo.png') }}" alt="Logo" width="160">
            </a>
            <div class="nav-kanan">
                <a href="#editor">EDITOR</a>
                <a href="#superuser" class="su-btn">SUPERUSER</a>
            </div>
        </div>
    </nav>
</body>

</html>