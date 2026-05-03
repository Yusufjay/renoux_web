<?= $this->extend('layout_admin') ?>

<?= $this->section('content') ?>
<div class="container-fluid pt-4">
    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <!-- Header Card Hitam Emas sesuai brand Renoux.co -->
                <div class="card-header bg-dark" style="border-bottom: 2px solid #d4af37;">
                    <h5 class="mb-0 text-white" style="font-weight: 600;">
                        Selamat Datang, M Yusuf Jaya Saputra
                    </h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">
                        Ini adalah halaman kontrol panel utama. Dari sini kamu bisa mengelola seluruh data website Renoux.co.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>