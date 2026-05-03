<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<!-- Header Halaman -->
<section class="breadcrumb-option" style="background: #f3f2ee; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4 style="font-weight: 700;">Our Story</h4>
                    <div class="breadcrumb__links">
                        <a href="<?= base_url('/') ?>" style="color: #111;">Home</a>
                        <span style="color: #b7b7b7;">About Platform</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Konten Utama: Tentang Platform -->
<section class="about spad" style="padding: 80px 0;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="about__text" style="padding-right: 30px;">
                    <h2 style="font-weight: 800; margin-bottom: 25px; line-height: 1.2;">Elevating Your Online <br><span style="color: #d4af37;">Shopping Experience</span></h2>
                    <p style="font-size: 16px; color: #444; line-height: 1.8;">
                        <strong>Renoux Shop</strong> adalah platform e-commerce masa kini yang dirancang untuk memberikan kemudahan, keamanan, dan kenyamanan dalam bertransaksi secara digital. Kami percaya bahwa teknologi harus memudahkan hidup, dan itulah misi utama di balik pengembangan platform ini.
                    </p>
                    <p style="font-size: 16px; color: #444; line-height: 1.8;">
                        Dibangun dengan integrasi sistem yang responsif, platform ini memastikan setiap pengguna mendapatkan akses cepat ke berbagai produk unggulan dengan tampilan yang intuitif dan elegan.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about__pic">
                    <!-- Gunakan foto bertema teknologi/gadget belanja di sini -->
                    <img src="<?= base_url('img/about/about-us.jpg') ?>" alt="E-commerce Tech" style="border-radius: 20px; box-shadow: 20px 20px 0px #f3f2ee;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tiga Pilar Keunggulan Platform -->
<section class="services spad" style="background: #fafafa; padding: 80px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                <div style="margin-bottom: 30px;">
                    <i class="fa fa-code" style="font-size: 40px; color: #d4af37;"></i>
                    <h4 style="margin-top: 20px; font-weight: 700;">Modern Tech Stack</h4>
                    <p>Dikembangkan menggunakan teknologi terbaru untuk performa website yang cepat dan stabil.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                <div style="margin-bottom: 30px;">
                    <i class="fa fa-shield" style="font-size: 40px; color: #d4af37;"></i>
                    <h4 style="margin-top: 20px; font-weight: 700;">Secure Transaction</h4>
                    <p>Sistem keamanan data yang terjamin untuk melindungi privasi dan kenyamanan transaksi Anda.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                <div style="margin-bottom: 30px;">
                    <i class="fa fa-desktop" style="font-size: 40px; color: #d4af37;"></i>
                    <h4 style="margin-top: 20px; font-weight: 700;">Responsive Design</h4>
                    <p>Tampilan yang optimal di berbagai perangkat, mulai dari smartphone hingga desktop.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pesan Developer -->
<section class="testimonial" style="padding: 100px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div style="padding: 40px; border: 1px solid #ebebeb; border-radius: 15px;">
                    <p style="font-size: 18px; font-style: italic; color: #666; margin-bottom: 25px;">
                        " fokus  menciptakan harmoni antara fungsionalitas kode dan keindahan visual. Renoux Shop adalah representasi dari komitmen tersebut."
                    </p>
                
                    <span style="color: #d4af37;">"Renoux.co"</span>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>