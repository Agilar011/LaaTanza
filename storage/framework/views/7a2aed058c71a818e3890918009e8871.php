<?php $__env->startSection("title"); ?>
    La Tahzan | Masuk
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="container-login-all">
        <div class="login">
            <h1>Selamat Datang Kembali!</h1>
            <h5>Silahkan Masuk Untuk Melanjutkan</h5>
            <input type="text" name="Email" placeholder="Email">
            <input type="password" name="Password" placeholder="Password">
            <a href="#">Lupa Password?</a>
            <button type="submit">Masuk</button>
            <p>Belum Punya Akun?<span><a href="#">Daftar</a></span></p>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\LaaTanzaa\FIle Website\web\resources\views/customer/login.blade.php ENDPATH**/ ?>