<?= $this->extend('layout_clear') ?>

<?= $this->section('content') ?>
<div class="login-card">
    <img src="<?= base_url('images/logo.png') ?>" alt="Renoux Logo" class="login-logo">
    
    <h2>Admin Login</h2>

    <?php if(session()->getFlashdata('error')): ?>
        <div class="error-msg"><?= session()->getFlashdata('error') ?></div>
    <?php endif; ?>

    <form action="<?= base_url('/login/process') ?>" method="post">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required autocomplete="off">
        </div>
        
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Sign In</button>
    </form>

    <a href="<?= base_url('/') ?>" class="back-link">Return to Home</a>
</div>
<?= $this->endSection() ?>