<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    </style>
    <title>View</title>
    <style>
        .section1 {
            font-family: "PT Serif", serif;
            margin: 0;
            padding: 0;
            margin-top: -20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #ffffff;
        }

        nav {
            position: sticky;
            top: 0;
            background-color: white;
            z-index: 1000;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 200%;
            gap: 60px;
        }

        .column {
            flex: 1;
            text-align: center;
        }

        .column img {
            width: 100%;
            height: auto;
            max-width: 300px;
            border-radius: 3px;
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .center img {
            max-width: 400px;
            /* Gambar tengah lebih besar */
        }

        h2 {
            font-weight: 700;
        }

        p {
            font-size: 14px;
            font-weight: 400;
            color: #555;
        }

        .section2 {
            min-height: 100vh;
            background-color: #F6F6F6;
        }

        .section2 h4 {
            font-family: "PT Serif", serif;
        }

    </style>
</head>

<body>
    <!-- tampilan navbar -->
    <nav>@include('tataLetak.navbar')</nav>

    <section class="section1">
        <div class="container">
            <!-- Kolom Kiri -->
            <div class="column">
                <h5>Makes your moment looks epic.</h5>
                <img src="{{ asset('img/img2.jpg') }}" alt="Couple Holding Hands">
                <p>Every detail, tears, and moment is more precious than any jewelry in the world.</p>
            </div>

            <!-- Kolom Tengah (Gambar Besar) -->
            <div class="column center">
                <img src="{{ asset('img/img1.jpg') }}" alt="Bride and Groom">
            </div>

            <!-- Kolom Kanan -->
            <div class="column">
                <h5>Hello, We are pehpotret.</h5>
                <img src="{{ asset('img/img3.jpg') }}" alt="Wedding Rings">
                <p>Their moment is more precious than any <br> jewelry in the world.</p>
            </div>
        </div>
    </section>

    <section class="section2">
        <h4>SCHEDULING PEHPOTRET</h4>
    </section>

    <!-- tampilan footer -->
    @include('tataLetak.footer')
</body>

</html>