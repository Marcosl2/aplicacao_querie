<?= $this->extend('layouts/main_layout') ?>
<?= $this->section('content') ?>
<section class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-6 col-8 p-4 text-center bg-light rounded shadow">
            <?= form_open('main/login_submit') ?>
            <h3 class="text-center text-primary"><?= APP_NAME ?></h3>
            <div class="mb-3 text-start">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control form-control-sm" placeholder="Username" autofocus required>
            </div>
            <div class="mb-3  text-start">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control form-control-sm" placeholder="password" required>
            </div>
            <div class="mb-3">
                <button type="password" class="btn btn-success w-100">Login</button>
            </div>
            <?= form_close() ?>
        </div>

    </div>

</section>
<?= $this->endSection() ?>