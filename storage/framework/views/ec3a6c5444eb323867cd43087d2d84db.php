<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-landing.css">
    <link rel="stylesheet" href="css/style-login-register.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $__env->yieldContent('title'); ?></title>
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
        <div class="container-all">

            <div class="container-navbar">

                
            </div>

            <div class="category-menu">
                <div class="dropdown">
                    <div class="select">
                        <span class="selected">Semua Kategori</span>
                        <div class="caret"></div>
                    </div>
                    <ul class="menu">
                        <li><a href="">Semua Kategori</a></li>
                        <li><a href="">Umroh</a></li>
                        <li><a href="">Properti</a></li>
                        <li><a href="">Otomotif</a></li>
                    </ul>
                </div>
            </div>

            <div class="container-content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>


        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>


    
        </div>

        <div class="category-menu">
            <div class="dropdown">
                <div class="select">
                    <span class="selected">Semua Kategori</span>
                    <div class="caret"></div>
                </div>
                <ul class="menu">
                    <li><a href="">Semua Kategori</a></li>
                    <li><a href="">Umroh</a></li>
                    <li><a href="">Properti</a></li>
                    <li><a href="">Otomotif</a></li>
                </ul>
            </div>
        </div>

        <div class="container-content">
            <?php echo $__env->yieldContent('content'); ?>
        </div>


     --}}

    <footer class="footer-container">
        <div class="footer-left">
            <h3>La <span>Tahzan</span></h3>
            <p class="footer-links">
                <a href="#">Home</a>
                |
                <a href="#">About</a>
                |
                <a href="#">Contact</a>
                |
                <a href="#">Blog</a>
            </p>

            <p class="footer-company-name">Copyright © 2021 <strong>La Tahzan</strong>
            All right reserved</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Blitar,</span> Jawa Timur</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>+62 877-7719-8429</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">la.tahzan@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-company-about">
                <span>About The Company</span>
                <strong>La Tahzan</strong> Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Perspiciatis delectus mollitia qui? Corporis suscipit
                magni nemo facilis porro, non dolore!
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </footer>


    <script type="text/javascript">
        function noTelp(evt){
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57)){
                return false;
            return true
            }
        }

        function welcome() {
            window.open("/login")
        }

        function oto() {
            window.open("/otomotif")
        }

        function prop() {
            window.open("/properti")
        }

        function umroh() {
            window.open("/umroh")
        }

        const dropdowns = document.querySelectorAll('.dropdown');
        dropdowns.forEach(dropdowns => {
            const select = dropdowns.querySelector('.select');
            const caret = dropdowns.querySelector('.caret');
            const menu = dropdowns.querySelector('.menu');
            const options = dropdowns.querySelector('.menu li');
            const selected = dropdowns.querySelector('.selected');

            select.addEventListener('click', () => {
                select.classList.toggle('select-clicked');
                caret.classList.toggle('caret-rotate');
                menu.classList.toggle('menu-open');
            });

            options.forEach(option => {
                option.addEventListener('click', () => {
                    selected.innerText = option.innerText;
                    select.classList.remove('select-clicked');
                    caret.classList.remove('caret-rotate');
                    menu.classList.remove('menu-open');
                    options.forEach(option =>{
                        option.classList.remove('active');
                    });
                    option.classList.add('active');
                });
            });
        });

    </script>

</body>

</html>
<?php /**PATH D:\project\LaaTanzaa\FIle Website\web\resources\views/layouts/main.blade.php ENDPATH**/ ?>