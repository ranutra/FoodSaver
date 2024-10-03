<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FoodSaver</title>

  {{-- Fonts --}}
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet"
  />

  {{-- Feather Icons --}}
  <script src="https://unpkg.com/feather-icons"></script>

  {{-- My Style --}}
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    {{-- Navbar Start --}}
    <nav class="menu">
      <div class="brand">
        <h1>FoodSaver</h1>
      </div>
      <ul class="menu-list">
        <li><a href="#cover">Home</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </nav>
    {{-- Navbar End --}}

    <section class="hero" id="cover">
      <div class="content">
        <h1 class="heading">Selamatkan Makanan, Selamatkan Kehidupan!</h1>
        <a href="" class="cta">Register</a>
      </div>
    </section>

    {{-- Content Section Start --}}
    <section class="about-us" id="about">
      <img class="foto" src="img/kapal-lawd.jpg" alt="kapal-lawd">
      <h2 class="us">About Us</h2>
      <p class="bio">
        FoodSaver adalah inisiatif yang didedikasikan untuk mengatasi masalah limbah makanan dan kelaparan secara bersamaan. Kami menghubungkan bisnis dengan surplus makanan—seperti restoran, pengecer, dan petani—kepada organisasi amal, bank makanan, dan individu yang membutuhkan. Dengan memfasilitasi donasi dan redistribusi makanan yang masih layak konsumsi, kami berupaya menciptakan ekosistem yang berkelanjutan dan peduli. Kami percaya bahwa setiap makanan yang diselamatkan dapat membuat perbedaan nyata, bukan hanya bagi mereka yang membutuhkan, tetapi juga bagi lingkungan. Bergabunglah dengan kami untuk menciptakan perubahan positif dan membangun komunitas yang lebih kuat dan berkelanjutan.
      </p>
    </section>
    {{-- Content Section End --}}

    {{-- Footer Start --}}
    <footer id="contact">
      <div class="socials">
        <a href="https://www.instagram.com/"><i data-feather="instagram"></i></a>
        <a href="https://twitter.com/"><i data-feather="twitter"></i></a>
        <a href="https://www.facebook.com/"><i data-feather="facebook"></i></a>
      </div>

      <div class="credit">
        <p>Created by <span>LB01 - Group VII</span>. | &copy; 2024.</p>
      </div>
    </footer>
    {{-- Footer End --}}
  </div>
  <script>
    feather.replace();
  </script>
</body>
</html>