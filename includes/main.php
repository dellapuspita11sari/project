</head>

<body>

  <header class="page-header">
    <!-- topline -->
    <div class="page-header__topline">
      <div class="container clearfix">

        <div class="currency">
          <a class="currency__change" href="customer/my_account.php?my_orders">
          <?php
          if(!isset($_SESSION['customer_email'])){
          echo "Welcome :Guest"; 
          }
          else
          { 
              echo "Welcome : " . $_SESSION['customer_email'] . "";
            }
?>
          </a>
        </div>

        <div class="basket">
          <a href="cart.php" class="btn btn--basket">
            <i class="icon-basket"></i>
            <?php items(); ?> item
          </a>
        </div>
        
        
        <ul class="login">

<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="customer_register.php" class="login__link">Register</a>';
} 
  else
  { 
      echo '<a href="customer/my_account.php?my_orders" class="login__link">My Account</a>';
  }   
?>  
</li>


<li class="login__item">
<?php
if(!isset($_SESSION['customer_email'])){
  echo '<a href="checkout.php" class="login__link">Sign In</a>';
} 
  else
  { 
      echo '<a href="./logout.php" class="login__link">Logout</a>';
  }   
?>  
  
</li>
</ul>
      
      </div>
    </div>
    <!-- bottomline -->
    <div class="page-header__bottomline">
      <div class="container clearfix">

        <div class="logo">
          <a class="logo__link" href="index.php">
            <img class="logo__img" src="images/coco.png" alt="coco store logotype" width="125">
          </a>
        </div>

        <nav class="main-nav">
          <ul class="categories">

            <li class="categories__item">
              <a class="categories__link" href="shop.php">
                produk
               
              </a>
              </li>

            <!-- <li class="categories__item">
              <a class="categories__link" href="coco_drink.php">
                coco drink
               
              </a>
            </li>

            <li class="categories__item">
              <a class="categories__link categories__link--active" href="shop.php">
                coconut
              </a>
            </li> -->

            <!-- <li class="categories__item">
              <a class="categories__link" href="localstore.php">
                Local Stores
              </a>
            </li> -->

          <li class="categories__item">
              <a class="categories__link" href="customer/my_account.php?my_orders">
                Akun Saya
                <i class="icon-down-open-1"></i>
              </a>
              <div class="dropdown dropdown--lookbook">
                <div class="clearfix">
                  <div class="dropdown__half">
                    <div class="dropdown__heading">Pengaturan</div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="my_wishlist.php" class="dropdown__link">Daftar Keinginan</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="#" class="dropdown__link">Pesanan</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="cart.php" class="dropdown__link">Lihat Keranjang Saya</a>
                      </li>
                    </ul>
                  </div>
                  <div class="dropdown__half">
                    <div class="dropdown__heading"></div>
                    <ul class="dropdown__items">
                      <li class="dropdown__item">
                        <a href="edit_account.php" class="dropdown__link">Edit Akun Anda</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="change_pass.php" class="dropdown__link">Ubah Kata Sandi</a>
                      </li>
                      <li class="dropdown__item">
                        <a href="delete_account.php" class="dropdown__link">Hapus akun</a>
                      </li>
                    </ul>
                  </div>
                </div>
             

              </div>

            </li>

          </ul>
        </nav>
      </div>
    </div>
  </header>