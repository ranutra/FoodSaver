<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodSaver</title>
    <link rel="stylesheet" href="css/style.css" >
    {{-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e6f7e9;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        header {
            background-color: #ffffff;
            padding: 20px 0;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #4CAF50;
        }
        .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
        }
        .join-button {
            background-color: #FF6B6B;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .hero {
            background-color: #4CAF50;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 18px;
            margin-bottom: 30px;
        }
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
        }
        .cta-button {
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .primary {
            background-color: #FF6B6B;
            color: white;
        }
        .secondary {
            background-color: white;
            color: #4CAF50;
        }
        .events {
            padding: 50px 0;
        }
        .events h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .event-cards {
            display: flex;
            justify-content: space-between;
        }
        .event-card {
            width: 30%;
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .event-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .event-card-content {
            padding: 20px;
        }
        .event-card-content h3 {
            margin-top: 0;
        }
        .read-more {
            display: inline-block;
            margin-top: 10px;
            color: #FF6B6B;
            text-decoration: none;
        }
        .faq {
            background-color: white;
            padding: 50px 0;
        }
        .faq h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .faq-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        .faq-item {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 5px;
        }
        .about {
            padding: 50px 0;
            text-align: center;
        }
    </style> --}}
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">FoodSaver</div>
                <div class="nav-links">
                    <a href="#">Home</a>
                    <a href="#">Menu</a>
                    <a href="#">About Us</a>
                    <a href="#">Event</a>
                    <a href="#" class="join-button">Join with Us</a>
                </div>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h1>Temukan Makanan dengan harga terjangkau</h1>
            <p>Kami menyediakan makanan sisa dari restoran dengan harga murah dan stiril untuk anda</p>
            <div class="cta-buttons">
                <a href="#" class="cta-button primary">Discover Restaurant</a>
                <a href="#" class="cta-button secondary">Join with Us</a>
            </div>
        </div>
    </section>

    <section class="events">
        <div class="container">
            <h2>Event Terbaru</h2>
            <div class="event-cards">
                <div class="event-card">
                    <img src="/api/placeholder/400/200" alt="Event 1">
                    <div class="event-card-content">
                        <h3>Event</h3>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="event-card">
                    <img src="/api/placeholder/400/200" alt="Event 2">
                    <div class="event-card-content">
                        <h3>Event</h3>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
                <div class="event-card">
                    <img src="/api/placeholder/400/200" alt="Event 3">
                    <div class="event-card-content">
                        <h3>Event</h3>
                        <a href="#" class="read-more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2>Frequently Asked Question</h2>
            <div class="faq-grid">
                <div class="faq-item">Lorem ipsum</div>
                <div class="faq-item">Lorem ipsum</div>
                <div class="faq-item">Lorem ipsum</div>
                <div class="faq-item">Lorem ipsum</div>
            </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
            <h2>About Us</h2>
            <p>FoodSaver adalah platform yang menghubungkan restoran dengan pelanggan untuk mengurangi limbah makanan. Kami menyediakan makanan berkualitas dengan harga terjangkau sambil membantu lingkungan.</p>
        </div>
    </section>
</body>
</html>