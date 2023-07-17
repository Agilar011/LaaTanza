<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <?php echo e(__('Dashboard')); ?>

        </h2>
     <?php $__env->endSlot(); ?>



<?php $__env->startSection('content'); ?>

<div class="layer-1">
    <div class="layer1-left">
        <h5>Jaminan 100% Aman!</h5>
        <h1>Daftar Umroh Kini Lebih Gampang, Cepat dan Aman Pake La Tahzan!</h1>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
            voluptates dolore autem optio corporis, veniam error vero obcaecati
             ratione voluptate laboriosam iste vitae magni, rerum maxime exercitationem
             iure doloribus, illum iusto architecto
        </h5>


        <button type="button">Lihat Layanan Kami!</button>
    </div>
    <div class="layer1-right">
        <img src="img/logo-1.png">
    </div>
</div>

<div class="layer-2">
    <div class="layer2-top">
        <h1>Layanan Kami</h1>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, nisi?</h5>
    </div>

    <div class="layer2-bottom">
        <div class="btn-umroh">
            <button type="button"><img src="img/umroh.png"></button>
            <h3>Umroh</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit atque labore quo unde, sit recusandae.</p>
        </div>
        <div class="btn-properti">
            <button type="button"><img src="img/properti.png"></button>
            <h3>Properti</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit atque labore quo unde, sit recusandae.</p>
        </div>
        <div class="btn-motor">
            <button type="button"><img src="img/motor.png"></button>
            <h3>Otomotif</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit atque labore quo unde, sit recusandae.</p>
        </div>
    </div>
</div>

<div class="layer-4-container">
    <div class="layer-4">
        <div class="layer4-title">
            <h1>Rekomendasi Otomotif</h1>
        </div>

        <div class="line">
            <h4>&nbsp</h4>
        </div>

        <div class="layer4-content">
            <div class="product">
                <div class="image">
                    <img src="img/motor/cbr.jpg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/satria.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/fazio.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/vario.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/ninja.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/cbr.jpg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/cbr.jpg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/cbr.jpg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/cbr.jpg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/motor/cbr.jpg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>All New CBR150R</h3>
                    <h1>Rp. 37.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>2021</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

        </div>

        <div class="layer4-btn">
            <button type="button">Lihat Selengkapnya Otomotif</button>
        </div>

    </div>

</div>

<div class="layer-4-container">
    <div class="layer-4">
        <div class="layer4-title">
            <h1>Rekomendasi Properti Disekitar Anda!</h1>
        </div>

        <div class="line">
            <h4>&nbsp</h4>
        </div>

        <div class="layer4-content">
            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/rumah/type26.png" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Dijual Rumah tipe 36</h3>
                    <h1>Rp. 670.000.000,-</h1>
                </div>
                <div class="year">
                    <h5>96m2</h5>
                    <h5>Kec. Sananwetan, Kota Blitar</h5>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

        </div>

        <div class="layer4-btn">
            <button type="button">Lihat Selengkapnya Properti</button>
        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\project\LaaTanzaa\New folder\web\resources\views/customer/landing.blade.php ENDPATH**/ ?>