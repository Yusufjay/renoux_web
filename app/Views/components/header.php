<style>
  /* Memberi jarak aman pada body agar konten tidak tertabrak navbar */
  body {
    padding-top: 85px;
  }

  /* Memaksa navbar terkunci mati di layar paling atas */
  .header {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    z-index: 99999 !important;
    /* Angka z-index tertinggi agar menimpa footer dan gambar */
    background-color: #ffffff !important;
    border-bottom: 2px solid #f3f2ee !important;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05) !important;
    transition: none !important;
    /* Mematikan animasi menghilang dari template */
    #preloder {
    display: none !important;
}
  }
</style>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="header__logo">
          <a href="<?= base_url('/') ?>" style="text-decoration: none; display: flex; align-items: center;">

            <!-- Logo tanpa kotak kuning -->
            <img src="<?= base_url('images/logo.png') ?>" alt="Logo Renoux" style="height: 40px; width: auto; object-fit: contain; margin-right: 12px;">

            <!-- Teks Merek "Renoux Shop" -->
            <h3 style="margin: 0; font-family: 'Playfair Display', serif; font-weight: 800; color: #111; letter-spacing: 1px;">
              Renoux <span style="color: #d4af37;">Shop</span>
            </h3>

          </a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <?php $current_url = current_url(); ?>
        <nav class="header__menu mobile-menu">
          <ul>
            <!-- Home aktif jika URL tidak mengandung 'collections' dan 'about' -->
            <li class="<?= (strpos($current_url, 'collections') === false && strpos($current_url, 'about') === false) ? 'active' : '' ?>">
              <a href="<?= base_url('/') ?>">Home</a>
            </li>

            <!-- Collections aktif jika URL mengandung kata 'collections' -->
            <li class="<?= (strpos($current_url, 'collections') !== false) ? 'active' : '' ?>">
              <a href="<?= base_url('index.php/collections') ?>">Collections</a>
            </li>

            <!-- Our Story aktif jika URL mengandung kata 'about' -->
            <li class="<?= (strpos($current_url, 'about') !== false) ? 'active' : '' ?>">
              <a href="<?= base_url('index.php/about') ?>">Our Story</a>
            </li>

            <!-- Login Admin (Bebas dari efek active/garis bawah) -->
            <li>
              <a href="<?= base_url('index.php/login') ?>" style="color: #d4af37; font-weight: bold;">Login Admin</a>
            </li>
          </ul>
        </nav>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="header__nav__option">
          <a href="#" class="search-switch"><img src="<?= base_url('img/icon/search.png') ?>" alt=""></a>
          <a href="#"><img src="<?= base_url('img/icon/heart.png') ?>" alt=""></a>
          <a href="#"><img src="<?= base_url('img/icon/cart.png') ?>" alt=""> <span>0</span></a>
        </div>
      </div>
    </div>
    <div class="canvas__open"><i class="fa fa-bars"></i></div>
  </div>
</header>