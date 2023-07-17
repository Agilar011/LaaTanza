<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-dashboard-admin.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
    
    <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        

        <div class="container">

            <div class="sidebar">
                <div class="header">
                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/explore.png" alt="" class="icon">
                            <span class="desc-header">La Tahzan</span>
                        </a>
                    </div>
                    <div class="illustration">
                        <img src="img/admin/admin.png" alt="">
                    </div>
                </div>

                <div class="main">

                    <div class="category">
                        <div class="sub">
                            <p>Input Produk</p>
                        </div>
                    </div>

                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/in-umroh.png" alt="" class="icon">
                            <span class="desc">Inp. Umroh</span>
                        </a>
                    </div>
                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/in-oto.png" alt="" class="icon">
                            <span class="desc">Inp. Otomotif</span>
                        </a>
                    </div>
                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/in-prop.png" alt="" class="icon">
                            <span class="desc">Inp. Properti</span>
                        </a>
                    </div>

                    <div class="category">
                        <div class="sub">
                            <p>Etalase Toko</p>
                        </div>
                    </div>

                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/umroh.png" alt="" class="icon">
                            <span class="desc">Umroh</span>
                        </a>
                    </div>
                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/oto.png" alt="" class="icon">
                            <span class="desc">Otomotif</span>
                        </a>
                    </div>
                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/prop.png" alt="" class="icon">
                            <span class="desc">Properti</span>
                        </a>
                    </div>

                    <div class="category">
                        <div class="sub">
                            <p>Data Transaksi</p>
                        </div>
                    </div>

                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/tr-umroh.png" alt="" class="icon">
                            <span class="desc">Transaksi Umroh</span>
                        </a>
                    </div>

                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/tr-oto.png" alt="" class="icon">
                            <span class="desc">Transaksi Otomotif</span>
                        </a>
                    </div>

                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/tr-prop.png" alt="" class="icon">
                            <span class="desc">Transaksi Properti</span>
                        </a>
                    </div>

                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/report.png" alt="" class="icon">
                            <span class="desc">Laporan Transaksi</span>
                        </a>
                    </div>

                    <div class="category">
                        <div class="sub">
                            <p>Customer</p>
                        </div>
                    </div>

                    <div class="list-items">
                        <a href="#">
                            <img src="img/admin/team.png" alt="" class="icon">
                            <span class="desc">Customer</span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="main-content">
                <div id="menu-button">
                    <input type="checkbox" name="" id="menu-checkbox">
                    <label for="menu-checkbox" id="menu-label">
                        <div id="hamburger"></div>
                    </label>
                </div>
            </div>

        </div>


     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>



    <script src="js/script.js"></script>
</body>
</html>
<?php /**PATH D:\project\LaaTanzaa\New folder\web\resources\views/admin/main-dashboard-admin.blade.php ENDPATH**/ ?>