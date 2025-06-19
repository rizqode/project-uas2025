<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LENTERA STUDIO</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        font-family: "Segoe UI", sans-serif;
        background-color: #1e2a50;
        color: #ffffff;
      }

      /* HERO SECTION */
      .hero {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        padding: 3rem;
        background-color: #24325f;
        max-width: 1200px;
        margin: auto;
        gap: 2rem;
      }

      .hero-text {
        flex: 1;
        padding-right: 2rem;
      }

      .hero-text h1 {
        font-size: 3rem;
        line-height: 1.2;
        color: #ffffff;
      }

      .hero-text h1 span {
        font-weight: 600;
        color: #8ea8ff;
      }

      .hero-text p {
        margin-top: 1rem;
        font-size: 1rem;
        color: #dce1f5;
      }

      .hero-text button {
        margin-top: 1.5rem;
        padding: 0.7rem 1.5rem;
        border: none;
        background-color: #ffffff;
        color: #1e2a50;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 800;
      }

      .hero-text button:hover {
        background-color: #ffffff;
      }

      .temp {
        margin-top: 1.2rem;
        font-size: 0.9rem;
        color: #dce1f5;
      }

      .hero-img {
        flex: 1;
        aspect-ratio: 16/10;
        background: url("Gallery/7d76ccb090e37c34c5e4c49862854ab4.jpg")
          center/cover no-repeat;
        border-radius: 20px;
      }

      /* GALLERY SECTION */
      .gallery {
        padding: 2rem 3rem;
        background-color: #1e2a50;
      }

      .gallery-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.5rem;
      }

      .gallery-header h2 {
        font-size: 1.5rem;
        color: #ffffff;
      }

      .gallery-header a {
        text-decoration: none;
        font-size: 1rem;
        color: #ffffff;
      }

      .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
        gap: 1.5rem;
      }

      .card {
        border-radius: 12px;
        overflow: hidden;
        text-align: center;
      }

      .card img {
        width: 100%;
        height: auto;
        object-fit: cover;
        border-radius: 12px;
      }

      /* PAKET SECTION */
      .paket-section {
        padding: 4rem 2rem;
        background-color: #fff;
        text-align: center;
      }

      .paket-section h2 {
        font-size: 1.75rem;
        font-weight: bold;
        margin-bottom: 2rem;
        color: #1e2a57;
      }

      .paket-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 1.5rem;
        background: #f1f5f9;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
      }

      .paket-item {
        font-size: 1rem;
        font-weight: 600;
        color: #1e2a57;
        padding: 0.75rem 1.25rem;
        background-color: white;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease;
      }

      .paket-item:hover {
        transform: translateY(-4px);
        background-color: #e2e8f0;
      }

      /* ABOUT US SECTION */
      .about {
        padding: 3rem;
        background-color: #24325f;
        text-align: center;
      }

      .about h2 {
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #ffffff;
      }

      .about p {
        max-width: 700px;
        margin: 0 auto;
        font-size: 1.05rem;
        line-height: 1.8;
        color: #ffffff;
      }

      .contact-btn {
        background-color: #ffffff;
        color: #1e2a50;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        text-decoration: none;
        display: inline-block;
        margin-top: 1rem;
      }

      .contact-btn:hover {
        transform: scale(1.05);
      }

      /* ANIMASI */
      [data-animate="left"] {
        opacity: 0;
        transform: translateX(-40px);
        transition: all 0.6s ease-out;
      }

      [data-animate="right"] {
        opacity: 0;
        transform: translateX(40px);
        transition: all 0.6s ease-out;
      }

      [data-animate].active {
        opacity: 1;
        transform: translateX(0);
      }

      /* MOBILE */
      @media (max-width: 768px) {
        .hero {
          flex-direction: column;
          text-align: center;
          padding: 2rem 1rem;
        }

        .hero-text {
          padding-right: 0;
        }

        .hero-img {
          width: 100%;
          height: 250px;
          margin-top: 2rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- HERO SECTION -->
    <section class="hero">
      <div class="hero-text" data-animate="left">
        <h1>LENTERA<br /><span>STUDIO FOTO</span></h1>
        <p>
          Studio fotografi profesional dengan suasana hangat dan fasilitas yang
          dirancang untuk kenyamanan Anda. Di Lentera Studio, setiap momen tak
          hanya diabadikan, tapi diceritakan melalui lensa, penuh emosi,
          ekspresi, dan makna. Cocok untuk sesi wisuda, prewedding, keluarga,
          hingga kebutuhan komersial dengan hasil berkualitas tinggi.
        </p>
        <a href="#paket">
          <button>Jelajahi Studio</button>
        </a>
        <p class="temp">Paket: Basic • Premium • Eksklusif</p>
      </div>
      <div class="hero-img" data-animate="right"></div>
    </section>

    <!-- GALLERY SECTION -->
    <section class="gallery">
      <div class="gallery-header">
        <h2>Explore Studio Lainnya</h2>
        <a href="#">Lihat Semua →</a>
      </div>
      <div class="gallery-grid">
        <div class="card">
          <img
            src="Gallery/7d76ccb090e37c34c5e4c49862854ab4.jpg"
            alt="Galeri 1"
          />
        </div>
        <div class="card">
          <img
            src="Gallery/7d76ccb090e37c34c5e4c49862854ab4.jpg"
            alt="Galeri 2"
          />
        </div>
        <div class="card">
          <img
            src="Gallery/7d76ccb090e37c34c5e4c49862854ab4.jpg"
            alt="Galeri 3"
          />
        </div>
        <div class="card">
          <img
            src="Gallery/7d76ccb090e37c34c5e4c49862854ab4.jpg"
            alt="Galeri 4"
          />
        </div>
      </div>
    </section>

    <!-- PAKET SECTION -->
    <section
      id="paket"
      style="background: #1e2a57; padding: 2rem 1rem; text-align: center; color: #f0f4f8"
    >
      <h2 style="font-size: 1.75rem; font-weight: bold; margin-bottom: 0.75rem">
        Self Portrait and Graduation
      </h2>
      <p style="font-size: 1rem">
        Couple Self Portrait • Group Self Portrait • Graduation • Paket Family
      </p>
    </section>

    <!-- ABOUT US SECTION -->
    <section class="about">
      <h2 data-animate="left">About Lentera Studio</h2>
      <p data-animate="right">
        Lentera Studio adalah studio foto profesional yang berfokus pada
        kualitas, pencahayaan sempurna, dan suasana nyaman. Kami menyediakan
        layanan fotografi untuk wisuda, keluarga, produk, dan banyak lagi.
      </p>
      <a href="contact.html" class="contact-btn" data-animate="right">
        Hubungi Kami
      </a>
    </section>

    <!-- ANIMASI -->
    <script>
      function animateOnScroll() {
        const elements = document.querySelectorAll("[data-animate]");
        const triggerBottom = window.innerHeight * 0.85;

        elements.forEach((el) => {
          const rect = el.getBoundingClientRect().top;
          if (rect < triggerBottom) {
            el.classList.add("active");
          }
        });
      }

      window.addEventListener("scroll", animateOnScroll);
      window.addEventListener("load", animateOnScroll);
    </script>
  </body>
</html>
