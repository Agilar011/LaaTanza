<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style-landing.css">
    <link rel="stylesheet" href="css/style-login-register.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>La Tahzan | Home</title>
</head>
<body>
    <div class="container-all">

        <div class="container-navbar">

            <div class="navbar">
                <div class="nav-title">
                    <a href="/"><h1>LaTahzan</h1></a>
                </div>
                <div class="nav-btn">
                    <ul>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Testimoni</a></li>
                        <li><a href="#">Kontak Kami</a></li>
                        <li><a href="#">Tentang</a></li>
                    </ul>
                </div>

                <div class="searchbar">
                    <form>
                        <input type="text" placeholder="Temukan Motor, Rumah atau Paket Umroh Disini..">
                        <button type="submit">Cari</button>
                    </form>
                </div>

                <div class="login-register">
                    <div class="content">
                        <a href="/register">Daftar</a>
                        <button type="button" onclick="welcome()">Masuk</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-content">
            @yield('content')
        </div>


    </div>

    <script>
        function welcome() {
            window.open("/login")
        }
    </script>
</body>
</html>
