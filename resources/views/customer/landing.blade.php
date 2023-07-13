

@extends('layouts.main')

@section("title")
    La Tahzan | Home
@endsection


@section('content')

<div class="layer-1">
    <div class="layer1-left">
        <h5>Jaminan 100% Aman!</h5>
        <h1>Daftar Umroh Kini Lebih Gampang, Cepat dan Aman Pake La Tahzan!</h1>
        <h5>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
            voluptates dolore autem optio corporis, veniam error vero obcaecati
             ratione voluptate laboriosam iste vitae magni, rerum maxime exercitationem
             iure doloribus, illum iusto architector
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
            <button type="button" onclick="umroh()"><img src="img/umroh.png"></button>
            <h3>Umroh</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit atque labore quo unde, sit recusandae.</p>
        </div>
        <div class="btn-properti">
            <button type="button" onclick="prop()"><img src="img/properti.png"></button>
            <h3>Properti</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit atque labore quo unde, sit recusandae.</p>
        </div>
        <div class="btn-motor">
            <button type="button" onclick="oto()"><img src="img/motor.png"></button>
            <h3>Otomotif</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Suscipit atque labore quo unde, sit recusandae.</p>
        </div>
    </div>
</div>

{{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}

<div class="layer-3-container">
    <div class="layer-3">
        <div class="layer3-title">
            <h1>Paket Umroh / Haji Terbatas!</h1>
        </div>

        <div class="line">
            <h4>&nbsp</h4>
        </div>

        <div class="layer3-content">
            <div class="product">
                <div class="image">
                    <img src="img/umroh/umroh.jpeg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Paket Umroh Regular</h3>
                    <h1>Rp. 29.000.000,-</h1>
                </div>
                <div class="year">
                    <p>Kloter: <span>20 Juli - 1 Agustus</span></p>
                </div>

                <div class="fasilitas">
                    <h4>Fasilitas :</h4>
                    <ul>
                        <li><p>Pesawat Saudi Airlines (PP) kelas ekonomi Direct Jakarta - Jeddah</p></li>
                        <li><p>Hotel Madinah: Manazel Falah/*3 Setaraf (jarak 200 m-an/5 menitan ke Masjid Nabawi)</p></li>
                        <li><p>Hotel Makkah: Lemeridien Towers/ *3 setaraf (2 menit via Shuttle Bus + 5 menitn jalan kaki ke Masjidil Haram)</p></li>
                        <li><p>City Tour Madinah & Makkah</p></li>
                        <li><p>Air Zam Zam 5 Liter (*jika diizinkan)</p></li>
                        <li><p>Perlengkapan Umroh (Koper, Tas Kabin, Tas Paspor, Kain Ihram (laki-laki),
                            Sabuk Ihram (laki-kai), Mukena, Khimar, Tas Serut, Bahan Batik Seragam, Buku
                            Manasik)</p></li>
                        <li><p>Bagasi 23 kg x2 + 7 kg kabin</p></li>
                        <li><p>Manasik Umroh Offline di Hotel</p></li>
                        <li><p>Kereta Cepat Madinah-Makkah</p></li>

                    </ul>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/umroh/umroh.jpeg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Paket Umroh Regular</h3>
                    <h1>Rp. 29.000.000,-</h1>
                </div>
                <div class="year">
                    <p>Kloter: <span>20 Juli - 1 Agustus</span></p>
                </div>

                <div class="fasilitas">
                    <h4>Fasilitas :</h4>
                    <ul>
                        <li><p>Pesawat Saudi Airlines (PP) kelas ekonomi Direct Jakarta - Jeddah</p></li>
                        <li><p>Hotel Madinah: Manazel Falah/*3 Setaraf (jarak 200 m-an/5 menitan ke Masjid Nabawi)</p></li>
                        <li><p>Hotel Makkah: Lemeridien Towers/ *3 setaraf (2 menit via Shuttle Bus + 5 menitn jalan kaki ke Masjidil Haram)</p></li>
                        <li><p>City Tour Madinah & Makkah</p></li>
                        <li><p>Air Zam Zam 5 Liter (*jika diizinkan)</p></li>
                        <li><p>Perlengkapan Umroh (Koper, Tas Kabin, Tas Paspor, Kain Ihram (laki-laki),
                            Sabuk Ihram (laki-kai), Mukena, Khimar, Tas Serut, Bahan Batik Seragam, Buku
                            Manasik)</p></li>
                        <li><p>Bagasi 23 kg x2 + 7 kg kabin</p></li>
                        <li><p>Manasik Umroh Offline di Hotel</p></li>
                        <li><p>Kereta Cepat Madinah-Makkah</p></li>

                    </ul>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>

            <div class="product">
                <div class="image">
                    <img src="img/umroh/umroh.jpeg" alt="cbr">
                </div>
                <div class="name-price">
                    <h3>Paket Umroh Regular</h3>
                    <h1>Rp. 29.000.000,-</h1>
                </div>
                <div class="year">
                    <p>Kloter: <span>20 Juli - 1 Agustus</span></p>
                </div>

                <div class="fasilitas">
                    <h4>Fasilitas :</h4>
                    <ul>
                        <li><p>Pesawat Saudi Airlines (PP) kelas ekonomi Direct Jakarta - Jeddah</p></li>
                        <li><p>Hotel Madinah: Manazel Falah/*3 Setaraf (jarak 200 m-an/5 menitan ke Masjid Nabawi)</p></li>
                        <li><p>Hotel Makkah: Lemeridien Towers/ *3 setaraf (2 menit via Shuttle Bus + 5 menitn jalan kaki ke Masjidil Haram)</p></li>
                        <li><p>City Tour Madinah & Makkah</p></li>
                        <li><p>Air Zam Zam 5 Liter (*jika diizinkan)</p></li>
                        <li><p>Perlengkapan Umroh (Koper, Tas Kabin, Tas Paspor, Kain Ihram (laki-laki),
                            Sabuk Ihram (laki-kai), Mukena, Khimar, Tas Serut, Bahan Batik Seragam, Buku
                            Manasik)</p></li>
                        <li><p>Bagasi 23 kg x2 + 7 kg kabin</p></li>
                        <li><p>Manasik Umroh Offline di Hotel</p></li>
                        <li><p>Kereta Cepat Madinah-Makkah</p></li>

                    </ul>
                </div>
                <div class="buy">
                    <button>Beli Sekarang</button>
                </div>
            </div>



        </div>



        <div class="layer3-btn">
            <button type="button" onclick="umroh()">Lihat Selengkapnya Paket Umroh / Haji</button>
        </div>

    </div>

</div>


{{-- ------------------------------------------------------------------------------------------------------------------------------------------- --}}



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
            <button type="button" onclick="oto()" >Lihat Selengkapnya Otomotif</button>
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
            <button type="button" onclick="prop()">Lihat Selengkapnya Properti</button>
        </div>

    </div>
</div>

@endsection
