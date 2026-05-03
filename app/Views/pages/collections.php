<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<!-- Breadcrumb Section -->
<section class="breadcrumb-option" style="background: #f3f2ee; padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4 style="font-weight: 700;">Renoux Collections</h4>
                    <div class="breadcrumb__links">
                        <a href="<?= base_url('/') ?>" style="color: #111;">Home</a>
                        <span style="color: #b7b7b7;">Shop All</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Section -->
<section class="product spad" style="padding-top: 60px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Filter Kontrol -->
                <ul class="filter__controls">
                    <li class="active" data-filter="*">All Products</li>
                    <li data-filter=".perfume">Perfumes</li>
                    <li data-filter=".accessories">Accessories</li>
                </ul>
            </div>
        </div>
        <div class="row product__filter">

            <!-- PRODUK PARFUM 1 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mix accessories">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/product/product-1.jpg') ?>">
                        <span class="label" style="background: #d4af37;">Best Seller</span>
                    </div>
                    <div class="product__item__text">
                        <h6>Simple Shoes Navy</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>Rp 150.000</h5>
                    </div>
                </div>
            </div>

            <!-- PRODUK AKSESORIS 1 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mix accessories">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/product/product-2.jpg') ?>">
                    </div>
                    <div class="product__item__text">
                        <h6>Exclusive Leather Watch</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>Rp 350.000</h5>
                    </div>
                </div>
            </div>

            <!-- PRODUK PARFUM 2 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mix perfume">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('images/midd.jpg') ?>">
                        <span class="label">New</span>
                    </div>
                    <div class="product__item__text">
                        <h6>Renoux Ethereal Kiss</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>Rp 155.000</h5>
                    </div>
                </div>
            </div>

            <!-- PRODUK PARFUM 3 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mix perfume">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('images/ocean.jpg') ?>">
                    </div>
                    <div class="product__item__text">
                        <h6>Renoux Ocean Rogue</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>Rp 175.000</h5>
                    </div>
                </div>
            </div>

            <!-- PRODUK AKSESORIS 2 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mix accessories">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('img/product/product-5.jpg') ?>">
                        <span class="label">Sale</span>
                    </div>
                    <div class="product__item__text">
                        <h6>Minimalist Wallet Carbon</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>Rp 85.000</h5>
                    </div>
                </div>
            </div>

            <!-- PRODUK PARFUM 4 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mix perfume">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('images/parfum.jpg') ?>">
                    </div>
                    <div class="product__item__text">
                        <h6>Renoux Luminous Dew</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>Rp 175.000</h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>