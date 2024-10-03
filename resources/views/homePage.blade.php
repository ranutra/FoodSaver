<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .navbar {
            background-color: #15B392;
            height: 60px;
            /* position: sticky; */
            width: 100%;
        }


        .navbar-brand {
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 200px;
        }

        .navbar-nav .nav-link {
            color: white;
            margin-right: 15px;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link.active {
            color: white;
        }

        .navbar-nav .nav-link:hover {
            color: black;
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30"%3E%3Cpath stroke="white" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
        }

        .container-custom {
            background-image: url('images/Bg3.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%;
            margin-top: -100px;
            height: calc(100vh - 160px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: -20px;
        }

        .bold-text {
            font-weight: bold;
            font-size: 3rem;
            color: white;

        }

        .bold {
            color: white;

        }

        .register-btn {
            background-color: #15B392;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .About-Us {
            font-weight: bold;
            font-size: 1.6rem;
            color: #000;
        }

        .divider {
            width: 100%;
            height: 2px;
            background-color: rgba(0, 0, 0, 0.3);
            margin: 20px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.5);
        }

        .container-custom2 {

            margin-top: -180px;
            height: calc(100vh - 160px);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            
        }

        .footer {
            margin-top: -50px;
            background-color: #15B392;
            color: white;
            padding: 10px 0;
            font-size: 0.9rem;
        }

        .social-icons {
            margin-bottom: 5px;
        }

        .social-icon {
            margin: 0 8px;
            display: inline-block;
        }

        .social-icon img {
            width: 24px;
            height: 24px;
        }

        body {
            /* background-image: url('images/Bg.jpg'); */
            /* background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            width: 100%; */
            /* background-color: #b5b8ad; */
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <a class="navbar-brand" href="#">
                        FoodSaver
                    </a>
                </div>
                <div class="col-9">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Coontact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid container-custom tex-center d-flex justify-content-center" style="height: 100vh;">
        <div class="row">
            <div class="col-12">
                <div class="bold-text">
                    Reducing food loss and waste
                </div>
                <div class="bold-text">
                    through surplus food redistribution!
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="bold">
                    Connecting Food Banks, Donors, & Partner Agencies. All in one Website.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-primary register-btn">Register</button>
            </div>
        </div>
    </div>

    <!-- Divider -->
    <div class="divider"></div>

    <div class="container container-custom2 tex-center d-flex justify-content-center" style="height: 100vh;">
        <div class="row">
            <div class="col-12">
                <div class="About-Us">
                    About Us
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="About-Us-Description" style="max-width: 600px; margin: 0 auto; text-align: justify;">
                    <p>
                        Food Waste Marketplace adalah sebuah platform inovatif yang bertujuan untuk mengatasi masalah
                        limbah
                        makanan
                        dengan menghubungkan bisnis yang memiliki surplus makanan dengan organisasi amal, bank makanan,
                        dan
                        individu
                        yang membutuhkan. Kami percaya bahwa makanan yang berlebih tidak seharusnya berakhir di tempat
                        pembuangan,
                        tetapi dapat menyelamatkan nyawa dan membantu mereka yang kurang beruntung.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="social-icons">
                        <a href="#" class="social-icon"><img
                                src="https://img.icons8.com/ios-filled/24/ffffff/instagram-new.png"
                                alt="Instagram" /></a>
                        <a href="#" class="social-icon"><img
                                src="https://img.icons8.com/ios-filled/24/ffffff/twitter-squared.png"
                                alt="Twitter" /></a>
                        <a href="#" class="social-icon"><img
                                src="https://img.icons8.com/ios-filled/24/ffffff/tiktok.png" alt="TikTok" /></a>
                    </div>
                    <p>&copy; 2024 FoodSaver. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>