@extends('layout.master')    

@section('konten')

    <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('{{asset('./img/logo.png')}}');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Nikmati Makan Bersama Di Depot Al - Alamin</h1>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Minta Petunjuk Arah</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">Makanan Enak</h1>
                <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-white btn-outline-white">Periksa Menu</a></p>
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->
    </div> 
    

    <section class="section bg-light py-5  bottom-slant-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="">
            <span class="wrap-icon"><span class="flaticon-dinner d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Makan Santai</h3>
            <p>Makan secara santai di tempat kami. Berkelompok atau sendiri merasa nyaman</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="100">
            <span class="wrap-icon"><span class="flaticon-fish d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Ikan Segar Untuk Siomay & Batagor</h3>
            <p>Ikan yang digunakan masih sangat segar agar menjaga rasa dan kualitas makanan</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="200">
            <span class="wrap-icon"><span class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Minuman Dingin & Panas</h3>
            <p>Kami menyediakan minuman dingin dan panas sesuai keinginan anda.</p>
          </div>
          <div class="col-md-6 mb-4 mb-lg-0 col-lg-3 text-left service-block" data-aos="fade-up" data-aos-delay="300">
            <span class="wrap-icon"><span class="flaticon-meat d-block mb-4"></span></span>
            <h3 class="mb-2 text-primary">Daging Sapi 100%</h3>
            <p>Dalam pengelolaan daging kami membuat bakso dengan daging sapi 100% tanpa campuran daging lainnya.</p>
          </div>
        </div>
      </div>
    </section>
    

    <section class="section pb-0">
      <div class="container">
        <div class="row mb-5 justify-content-center" data-aos="fade">
            <div class="col-md-7 text-center heading-wrap">
              <h2 data-aos="fade-up">Depot Al - Alamin</h2>
              <p data-aos="fade-up" data-aos-delay="100">.</p>
            </div>
          </div>
        <div class="row align-items-center">
          <div class="col-lg-4">
            <img src="img/dishes_1.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="200">
          </div>
          <div class="col-lg-4">
            <img src="img/about_1.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="300">
            <img src="img/about_2.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="400">
          </div>
          <div class="col-lg-4">
            <img src="img/dishes_3.jpg" alt="Image" class="img-fluid about_img_1" data-aos="fade" data-aos-delay="500">
          </div>
        </div>
      </div>
    </section>

  <!--
    <section class="section ">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid mb-5">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Special Menu</h2>
            </div>
          </div>
        </div>
        <div class="owl-carousel centernonloop">
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="100">
            <div class="text">
              <p class="dishes-price">$11.50</p>
              <h2 class="dishes-heading">Organic tomato salad, gorgonzola cheese, capers</h2>
            </div>
            <img src="img/dishes_1.jpg" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="200">
            <div class="text">
              <p class="dishes-price">$12.00</p>
              <h2 class="dishes-heading">Baked broccoli</h2>
            </div>
            <img src="img/dishes_2.jpg" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="300">
            <div class="text">
              <p class="dishes-price">$11.00</p>
              <h2 class="dishes-heading">Spicy meatballs</h2>
            </div>
            <img src="img/dishes_3.jpg" alt="" class="img-fluid">
          </a>
          <a href="#" class="item-dishes" data-aos="fade-right" data-aos-delay="400">
            <div class="text">
              <p class="dishes-price">$12.00</p>
              <h2 class="dishes-heading">Eggplant parmigiana</h2>
            </div>
            <img src="img/dishes_4.jpg" alt="" class="img-fluid">
          </a>
        </div>
      </div>

    </section>
  -->
    <!-- .section -->

    <section class="section bg-light  top-slant-white bottom-slant-gray">

      <div class="clearfix mb-5 pb-5">
        <div class="container-fluid">
          <div class="row" data-aos="fade">
            <div class="col-md-12 text-center heading-wrap">
              <h2>Menu</h2>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/dishes_4.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Bakso Biasa</h3>
                <p>Bakso dengan mie lengkap dan 1 pentol besar dan 4 pentol kecil serta tahu.</p>
                <p class="text-primary h3">Rp. 14.000</p>
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/dishes_1.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Bakso Yamin</h3>
                <p>Bakso dengan mie merah khas Banjar bisa kering atau basah</p>
                <p class="text-primary h3">Rp. 14.000</p>
                
              </div>
              
            </div>

          </div>

          <div class="col-md-6">
            <div class="sched d-block d-lg-flex">
              <div class="bg-image order-2" style="background-image: url('img/dishes_2.jpg');" data-aos="fade"></div>
              <div class="text order-1">
                <h3>Siomay</h3>
                <p>Siomay yang berisi daging siomay, kentang, telur, dan tahu. Sangat membuat kenyang tahan lama.</p>
                <p class="text-primary h3">Rp. 12.000</p>
                
              </div>
              
            </div>

            <div class="sched d-block d-lg-flex">
              <div class="bg-image" style="background-image: url('img/dishes_3.jpg');" data-aos="fade"></div>
              <div class="text">
                <h3>Batagor</h3>
                <p>Batagor yang berisi daging batagor dan tahu serta pangsit untuk menambah rasa kriuk!</p>
                <p class="text-primary h3">Rp. 12.000</p>
                
              </div>
              
            </div>

          </div>
        </div>

        

      </div>
    </section> <!-- .section -->
   

    <footer class="site-footer" role="contentinfo">
      <div class="container mb-5">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <div class="row">
              <div class="col-md-12 mb-3">
                <h3>Berlangganan E-mail</h3>
                <p>Subscribe E-mail untuk mendapatkan promo menarik dari kami.</p>
              </div>

              <form action="" class="col-12 mb-5">
                <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                  <form>
                    {{csrf_field()}}
                  <input type="text" name="email" class="form-control" placeholder="Enter Email Address">
                  
                </div>
                <div class="col-md-4">
                  <input type="submit" class="btn btn-primary btn-block" value="Subscribe">
                </form>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>Tentang Kami</h3>
            <p class="mb-5">Warung kami berdiri sejak tahun 2003, dan saat itu warung kami berada di lapangan Kodim 1009 Pelaihari. Namun saat ini kami telah tumbuh dan memiliki tempat makan yang lebih luas.</p>
            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="https://facebook.com/depot.al.alamin" target="_blank" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="https://instagram.com/depot.al.alamin" target="_blank" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Jam Buka</h3>
              <p><strong class="d-block font-weight-normal text-black">Setiap Hari</strong> 15:00 - 21:00</p>
            </div>
            <div>
              <h3>Kontak</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Alamat:</span>
                  <span>Kodim 1009, Jl. A. Yani RT 01 RW 01 Kel. Angsau Kec. Pelaihari</span></li>
                <li class="d-block"><span class="d-block text-black">Telpon:</span><span><a href="tel:+6282251137182">0822-5113-7182</a></span></li>
                <li class="d-block"><span class="d-block text-black">Email:</span><span><a href="mailto:info@depot-al-alamin.id">info@depot-al-alamin.id</a></span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Link Cepat</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">Tentang</a></li>
              <li><a href="#">Ketentuan Layanan</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
    
@endsection
        