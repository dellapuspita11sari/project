<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

  <!-- Cover -->
  <main>
    <div class="hero" style="">
      <a href="shop.php" class="btn1">Lihat Semua Produk
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>coco collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Informasi</div>
            <ul class="footer-nav__list">
              <!-- <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">The brand</a>
              </li> -->
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Toko Lokal</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">layanan Pelanggan</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privasi &amp; cookies</a>
              </li>
              <!-- <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Site map</a>
              </li> -->
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Mengapa Membeli Dari Kami</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Pengiriman &amp; mengembalikan</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">pengiriman aman</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              <!-- <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Award winning</a>
              </li> -->
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Perdagangan Etis</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Akun Anda</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="checkout.php" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="customer_register.php" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="cart.php" class="footer-nav__link">Lihat Keranjang</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Lihat lookbook Anda</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Lacak Pesanan</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Perbarui Informasi</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Detail kontak</div>
            <address class="address">
            Head Office: cocostore.<br>
            pasar gebang, Bonang.
          </address>
            <div class="phone">
              Nomor handphone:
              <a class="phone__number" href="tel:0123456789">089-533-935-0004</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:dellapuspita11sari@gmail.com" class="email__addr">dellapuspita11sari@gmail.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>coconut</span><br> 
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> coco store Website-PHP&trade;
          </div>

          <!-- <div class="developer">
            Developed by Yasser Dalouzi
          </div> -->

          <div class="designby">
            Design by pitasar
          </div>

        </div>
      </div>
    </footer>
</body>
<?php
// $x = ($_GET['error']);
// if($x==1){
//   echo "
//   <script>
//   var Toast = Swal.mixin({
//     toast: true,
//     position: 'center-top',
//     showConfirmButton: false,
//     timer: 3000,
//   });
//   Toast.fire({
//     icon: 'error',
//     title: 'Login gagal.'
//   })
//   </script>";
// }
// else if($x==2){
//   echo "
//   <script>
//   var Toast = Swal.mixin({
//     toast: true,
//     position: 'center-top',
//     showConfirmButton: false,
//     timer: 3000,
//   });
//   Toast.fire({
//     icon: 'warning',
//     title: 'silahkan inputkan username dan password.'
//   })
//   </script>"; 
// }
// else{
//   echo'';
// }
?>

</html>
