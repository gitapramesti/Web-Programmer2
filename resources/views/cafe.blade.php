@extends('layouts.template')

@section('judul')
Home
@endsection

 <!-- ======= Hero Section ======= -->
 <section id="hero" class="hero d-flex align-items-center">

<div class="container">
  <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
      <h1 data-aos="fade-up">Anda bingung mencari cafe didekat anda?</h1>
      <h2 data-aos="fade-up" data-aos-delay="400">Ayo kunjungi wesbite ini! disini anda bisa melihat informasi cafe yang anda ingin</h2>
      <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
          <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Reservasi</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
      <img src="{{asset('tema/img/')}}" class="img-fluid" alt="">
    </div>
  </div>
</div>

</section><!-- End Hero -->

<main id="main">
<!-- ======= About Section ======= -->
<section id="about" class="about">

  <div class="container" data-aos="fade-up">
    <div class="row gx-0">

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
          <h3>Apa itu Caffe?</h3>
        
          <p>
          Istilah kata cafe berasal dari bahasa Perancis yang berarti kopi.
          Orang Perancis menyebut kedai kopi dengan istilah cafe. 
          Perancis menjadi salah satu Negara yang di juluki “Negri Caffe” karena pesatnya perkembangan caffe disana dan dari Perancis lah Cafe mulai tersebar luas di dunia.Cafe atau Coffee Shop atau yang di kenal sebagai Kedai Kopi berasal dari Turki (Sekarang Istanbul).
          Coffee Shop pertamakali berdiri di Constatinopel di Turki (Istanbul) pada tahun 1475. 
          Pada awalny Coffee Shop hanya menjual minuman kopi.Coffee Shop pertama di Eropa didirikan tahun 1529.
          Minuman ini menajadi sangat digemari di Eropa karena adanya ide untuk menyaring kopi dan memperhalus citra rasa minuman kopi dengan susu dan gula.
          Coffee Shop di Eropa semakin populer karena mereka tidak hanya menjual minuman kopi tetapi mulai menjual kue-kue manis dan penganan yang lainnya.
          </p>
          <div class="text-center text-lg-start">
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Baca Selengkapnya</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('tema/img/about.jpg')}}" class="img-fluid" alt="">
      </div>

    </div>
  </div>

</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('tema/img/cafe about.jfif')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>CAFE CLAVICULA.</h3>
            <p class="fst-italic">Lokasi : JL. Kartini Tegal Kec.Panggung Kota Tegal Provinsi. Jawa Tengah.            
            </p>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>FASILITAS</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i>Lahan Parkir</li>
              <li><i class="bi bi-check-circle"></i>Wifi</li>
              <li><i class="bi bi-check-circle"></i>Stop Kontak</li>
              <li><i class="bi bi-check-circle"></i>Permainan(Uno)</li>
              <li><i class="bi bi-check-circle"></i>Spot Foto</li>
              <li><i class="bi bi-check-circle"></i>Toilet</li>
              <li><i class="bi bi-check-circle"></i>Smooking Area</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
     
<header class="menu-header">
  <h2>Variasi Menu</h2>
  <p>Pilihan Menu dengan harga terjangkau</p>
</header>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Rekomendasi Menu</h2>
      <p>Pilihan Menu Best Seller Banyak Diminati</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All Menu</li>
          <li data-filter=".filter-app">Makanan </li>
          <li data-filter=".filter-card">Minuman </li>
          <li data-filter=".filter-web">Snack</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Salad Sayur dengan potongan roti</h4>
            <p>Harga 35.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Maryam Toping buah </h4>
            <p>Harga RP.65.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-3.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Mie Hots kaldu rendang </h4>
            <p>Harga RP. 55.000 </p>
            <div class="portfolio-links">
              <a href="tema/img/portfolio/portofolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Dalgona Coffe</h4>
            <p>Harga RP.20.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Bakar Toping Buah dan Sayur</h4>
            <p>Harga RP. 45.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Makanan Best Seller 3</h4>
            <p>Makanan Best Seller</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-7.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Blueberry </h4>
            <p>Harga RP 25.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-8.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Jeruk Nipis</h4>
            <p>Harga 15.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portofolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Pizza bakar toping sosis</h4>
            <p>Harga RP. 35.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Portfolio Section -->

          

</section><!-- End Services Section  -->



<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('tema/img/Naganan Cafe.jfif')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>NAGANAN CAFE</h3>
            <p class="fst-italic">Lokasi : JL.Kapten Sudibyo Pemalang Provinsi. Jawa-Tengah.            
            </p>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>FASILITAS</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i>Lahan Parkir</li>
              <li><i class="bi bi-check-circle"></i>Wifi</li>
              <li><i class="bi bi-check-circle"></i>Stop Kontak</li>
              <li><i class="bi bi-check-circle"></i>Permainan(Uno)</li>
              <li><i class="bi bi-check-circle"></i>Spot Foto</li>
              <li><i class="bi bi-check-circle"></i>Toilet</li>
              <li><i class="bi bi-check-circle"></i>Smooking Area</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
     
<header class="menu-header">
  <h2>Variasi Menu</h2>
  <p>Pilihan Menu dengan harga terjangkau</p>
</header>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Rekomendasi Menu</h2>
      <p>Pilihan Menu Best Seller Banyak Diminati</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All Menu</li>
          <li data-filter=".filter-app">Makanan </li>
          <li data-filter=".filter-card">Minuman </li>
          <li data-filter=".filter-web">Snack</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Salad Sayur dengan potongan roti</h4>
            <p>Harga 35.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Maryam Toping buah </h4>
            <p>Harga RP.65.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-3.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Mie Hots kaldu rendang </h4>
            <p>Harga RP. 55.000 </p>
            <div class="portfolio-links">
              <a href="tema/img/portfolio/portofolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Dalgona Coffe</h4>
            <p>Harga RP.20.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Bakar Toping Buah dan Sayur</h4>
            <p>Harga RP. 45.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Makanan Best Seller 3</h4>
            <p>Makanan Best Seller</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-7.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Blueberry </h4>
            <p>Harga RP 25.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-8.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Jeruk Nipis</h4>
            <p>Harga 15.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portofolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Pizza bakar toping sosis</h4>
            <p>Harga RP. 35.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Portfolio Section -->

  

</section><!-- End Services Section  -->


<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('tema/img/cafe acc.jfif')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>ACC COFFE</h3>
            <p class="fst-italic">Lokasi : JL.Brigjen katamso Procot Kec.Slawi Kab.Tegal Provinsi. Jawa Tengah.            
            </p>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>FASILITAS</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i>Lahan Parkir</li>
              <li><i class="bi bi-check-circle"></i>Wifi</li>
              <li><i class="bi bi-check-circle"></i>Stop Kontak</li>
              <li><i class="bi bi-check-circle"></i>Permainan(Uno)</li>
              <li><i class="bi bi-check-circle"></i>Spot Foto</li>
              <li><i class="bi bi-check-circle"></i>Toilet</li>
              <li><i class="bi bi-check-circle"></i>Smooking Area</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
     
<header class="menu-header">
  <h2>Variasi Menu</h2>
  <p>Pilihan Menu dengan harga terjangkau</p>
</header>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Rekomendasi Menu</h2>
      <p>Pilihan Menu Best Seller Banyak Diminati</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All Menu</li>
          <li data-filter=".filter-app">Makanan </li>
          <li data-filter=".filter-card">Minuman </li>
          <li data-filter=".filter-web">Snack</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Salad Sayur dengan potongan roti</h4>
            <p>Harga 35.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Maryam Toping buah </h4>
            <p>Harga RP.65.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-3.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Mie Hots kaldu rendang </h4>
            <p>Harga RP. 55.000 </p>
            <div class="portfolio-links">
              <a href="tema/img/portfolio/portofolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Dalgona Coffe</h4>
            <p>Harga RP.20.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Bakar Toping Buah dan Sayur</h4>
            <p>Harga RP. 45.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Makanan Best Seller 3</h4>
            <p>Makanan Best Seller</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-7.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Blueberry </h4>
            <p>Harga RP 25.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-8.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Jeruk Nipis</h4>
            <p>Harga 15.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portofolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Pizza bakar toping sosis</h4>
            <p>Harga RP. 35.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Portfolio Section -->

          

</section><!-- End Services Section  -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('tema/img/eat boss cafe.jfif')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>EAT BOSS CAFFE.</h3>
            <p class="fst-italic">Lokasi : JL. Apotik Angkasa Bandung Provinsi. Jawa Barat.            
            </p>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>FASILITAS</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i>Lahan Parkir</li>
              <li><i class="bi bi-check-circle"></i>Wifi</li>
              <li><i class="bi bi-check-circle"></i>Stop Kontak</li>
              <li><i class="bi bi-check-circle"></i>Permainan(Uno)</li>
              <li><i class="bi bi-check-circle"></i>Spot Foto</li>
              <li><i class="bi bi-check-circle"></i>Toilet</li>
              <li><i class="bi bi-check-circle"></i>Smooking Area</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
     
<header class="menu-header">
  <h2>Variasi Menu</h2>
  <p>Pilihan Menu dengan harga terjangkau</p>
</header>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Rekomendasi Menu</h2>
      <p>Pilihan Menu Best Seller Banyak Diminati</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All Menu</li>
          <li data-filter=".filter-app">Makanan </li>
          <li data-filter=".filter-card">Minuman </li>
          <li data-filter=".filter-web">Snack</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Salad Sayur dengan potongan roti</h4>
            <p>Harga 35.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Maryam Toping buah </h4>
            <p>Harga RP.65.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-3.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Mie Hots kaldu rendang </h4>
            <p>Harga RP. 55.000 </p>
            <div class="portfolio-links">
              <a href="tema/img/portfolio/portofolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Dalgona Coffe</h4>
            <p>Harga RP.20.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Bakar Toping Buah dan Sayur</h4>
            <p>Harga RP. 45.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Makanan Best Seller 3</h4>
            <p>Makanan Best Seller</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-7.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Blueberry </h4>
            <p>Harga RP 25.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-8.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Jeruk Nipis</h4>
            <p>Harga 15.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portofolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Pizza bakar toping sosis</h4>
            <p>Harga RP. 35.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Portfolio Section -->

          

</section><!-- End Services Section  -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="100">
            <div class="about-img">
              <img src="{{asset('tema/img/jakarta.jfif')}}" alt="">
            </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Caffe Luang Waktu</h3>
            <p class="fst-italic">Lokasi : JL. Martoloyo Kec.Gempol Jakarta Selatan.            
            </p>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>FASILITAS</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i>Lahan Parkir</li>
              <li><i class="bi bi-check-circle"></i>Wifi</li>
              <li><i class="bi bi-check-circle"></i>Stop Kontak</li>
              <li><i class="bi bi-check-circle"></i>Permainan(Uno)</li>
              <li><i class="bi bi-check-circle"></i>Spot Foto</li>
              <li><i class="bi bi-check-circle"></i>Toilet</li>
              <li><i class="bi bi-check-circle"></i>Smooking Area</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">
     
<header class="menu-header">
  <h2>Variasi Menu</h2>
  <p>Pilihan Menu dengan harga terjangkau</p>
</header>
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Rekomendasi Menu</h2>
      <p>Pilihan Menu Best Seller Banyak Diminati</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All Menu</li>
          <li data-filter=".filter-app">Makanan </li>
          <li data-filter=".filter-card">Minuman </li>
          <li data-filter=".filter-web">Snack</li>
        </ul>
      </div>
    </div>

    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Salad Sayur dengan potongan roti</h4>
            <p>Harga 35.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portfolio-1.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Maryam Toping buah </h4>
            <p>Harga RP.65.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-2.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-3.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Mie Hots kaldu rendang </h4>
            <p>Harga RP. 55.000 </p>
            <div class="portfolio-links">
              <a href="tema/img/portfolio/portofolio-3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Dalgona Coffe</h4>
            <p>Harga RP.20.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-4.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Bakar Toping Buah dan Sayur</h4>
            <p>Harga RP. 45.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-5.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Makanan Best Seller 3</h4>
            <p>Makanan Best Seller</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-6.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-7.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Blueberry </h4>
            <p>Harga RP 25.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portfolio-7.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-8.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Ice Jeruk Nipis</h4>
            <p>Harga 15.000</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portofolio/portofolio-8.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Roti Pizza bakar toping sosis</h4>
            <p>Harga RP. 35.000r</p>
            <div class="portfolio-links">
              <a href="{{asset('tema/img/portfolio/portofolio-9.jpg')}}" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</section><!-- End Portfolio Section -->

          

</section><!-- End Services Section  -->


<!-- ======= Team Section ======= -->

<section id="team" class="team">

<div class="container" data-aos="fade-up">

  <header class="section-header">
    <h2>Testimoni</h2>
    <p>Review dari masyarakat</p>
  </header>

  <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="200">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Website ini sangat bermanfaat bagi semua orang karena infomasi terkait cafe sangat akurat
          </p>
          <div class="profile mt-auto">
            <img src="tema/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Siska Aulia Utami/h3>
            <h4>Mahasiswa &amp; Founder</h4>
          </div>
        </div>
      </div><!-- End testimonial item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
           informasi pelimihan beberapa cafe Sangat Memuaskan sesuai yang diinginkan konsumen
          </p>
          <div class="profile mt-auto">
            <img src="tema/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Dera Safitri</h3>
            <h4>Pengusaha</h4>
          </div>
        </div>
      </div><!-- End team item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Sangat Membantu saya ketika bingung mencari cafe yang ada disekitar lokasi saya 
          </p>
          <div class="profile mt-auto">
            <img src="tema/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Nabila Ayu Carmelita</h3>
            <h4>Admin </h4>
          </div>
        </div>
      </div><!-- End team item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
           Website Terbaik yang saya kunjungi untuk melihat beberapa cafe yang sebelumnya saya tidak tahu. terimakasih
          </p>
          <div class="profile mt-auto">
            <img src="tema/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Wardah Feby Harlina</h3>
            <h4>Guru Bahasa Inggris</h4>
          </div>
        </div>
      </div><!-- End team item -->

      <div class="swiper-slide">
        <div class="testimonial-item">
          <div class="stars">
            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          </div>
          <p>
            Tampilan website sangat menarik jadi tidak bosan untuk melihat informasi didalamnya. 
          </p>
          <div class="profile mt-auto">
            <img src="tema/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>Refalhady</h3>
            <h4>Artis </h4>
          </div>
        </div>
      </div><!-- End team item -->

    </div>
    <div class="swiper-pagination"></div>
  </div>

</div>

</section><!-- End Team Section -->


<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div class="container" data-aos="fade-up">

    <header class="section-header">
      <h2>Contact</h2>
      <p>Contact Us</p>
    </header>

    <div class="row gy-4">

      <div class="col-lg-6">

        <div class="row gy-4">
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-geo-alt"></i>
              <h3>Alamat</h3>
              <p>Tegal, Jawa Tengah,<br>Indonesia, 52411</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-telephone"></i>
              <h3>No.Telp</h3>
              <p>0878-8559-3776<br></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p>gitapramesti69@gmail.com<br></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="info-box">
              <i class="bi bi-clock"></i>
              <h3>Buka</h3>
              <p>Setiap hari<br> 09.00-00.00 WIB</p>
            </div>
          </div>
        </div>

      </div>

      <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Nama" required>
            </div>

            <div class="col-md-6 ">
              <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>

            <div class="col-md-12">
              <input type="text" class="form-control" name="subject" placeholder="Subjek" required>
            </div>

            <div class="col-md-12">
              <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Terimakasih anda telah mengirimkan pesan!</div>

              <button type="submit">Kirim Pesan</button>
            </div>

          </div>
        </form>

      </div>

    </div>

  </div>

</section><!-- End Contact Section -->
