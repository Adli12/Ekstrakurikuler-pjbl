<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ekstrakurikuler</title>
    <link rel="shortcut icon" href="{{ asset('img/logoicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="css/home.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- link swipe -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="navbar-main">
            <img src="img/smk2.png" alt="sekolah" width="50px" height="50px">
            <p class="logo">ekstrakurikuler SMKN 2 Kota Bekasi</p>
        </div>
        <div class="navbar-nav">
            <ul>
                <li><a href="#home">home</a></li>
                <li><a href="#about">about</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#news">news</a></li>
                <li><a href="{{ route('login') }}">login</a></li>
            </ul>
        </div>
        <div class="navbar-extra">
            <a id="menu"><i class="bi bi-list"></i></a>
        </div>
    </nav>
    <!-- close navbar -->

    <!-- home -->
    <section class="hero" id="home">
        <img src="img/butun2.jpg" alt="" class="full-screen">
    </section>

    <section class="ekskul">
        <h2>Ekstrakurikuler SMKN 2 Kota Bekasi</h2>
        <p>Berbagai pilihan ekstrakurikuler untuk mengembangkan bakat dan minatmu.</p>
        <div class="ekskul-container">
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/seni (1).png') }}" alt="Ekskul 1">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/LOGO EKSKUL BASKET 2.jpg') }}" alt="Ekskul 2">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/LOGO EKSKUL IRMA.png') }}" alt="Ekskul 3">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/LOGO EKSKUL JC.png') }}" alt="Ekskul 4">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/LOGO EKSKUL PIKR.png') }}" alt="Ekskul 5">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/seni (3).png') }}" alt="Ekskul 6">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/LOGO EKSKUL PRAMUKA.jpg') }}" alt="Ekskul 6">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/seni (2).png') }}" alt="Ekskul 6">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/ec.png') }}" alt="Ekskul 6">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/seni.png') }}" alt="Ekskul 6">
            </div>
            <div class="ekskul-box">
                <img src="{{ asset('img/Logo/paskib.png') }}" alt="Ekskul 6">
            </div>
        </div>
    </section>

    <!-- section about -->
    <section class="about" id="about">
        <h2>about</h2>
        <div class="container-about" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="about-img">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <div class="about-main">
                <h4>ekstrakurikuler</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur magni, vel ut libero ea beatae
                    esse
                    temporibus adipisci saepe dignissimos cum aliquam vitae quaerat? Sunt repudiandae soluta suscipit
                    adipisci nostrum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi consequuntur libero
                    repudiandae quae impedit aliquid pariatur quod nobis atque error, repellendus incidunt id officiis
                    voluptatibus consectetur, vel iusto minima facilis. Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Velit cupiditate optio voluptas alias, aut minima dolor ipsam</p>
                <button class="btn-learn" id="openmodal">learn more <i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>

    <!-- more about -->
    <div class="modal" id="myModal">
        <div class="modal-content">
            <span class="closebtn" id="closemodal"><i class="bi bi-x-circle"></i></span>
            <h3>informasi ekstrakurikuler</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore saepe aliquam numquam, debitis
                corrupti magnam at asperiores voluptatibus corporis architecto ea cum delectus dignissimos sed nam
                ipsam! Repellat, at perferendis!</p>
        </div>
    </div>

    <!-- section gallery -->
    <section class="gallery" id="gallery">
        <h2>gallery</h2>
        <div class="gallery-container" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50"
            data-aos-duration="1000" data-aos-easing="ease-in-out">
            <div class="gallery-item">
                <img src="{{ asset('img/Foto kegiatan/basket/basket.jpg') }}" alt="gallery"
                    onclick="openModal(this.src)">
                <div class="info">Basket</div>
                <hr>
                <div class="icon">
                    <p>100</p>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('img/Foto kegiatan/koppling/IMG-20250222-WA0063.jpg') }}" alt="gallery"
                    onclick="openModal(this.src)">
                <div class="info">Koppling</div>
                <hr>
                <div class="icon">
                    <p>25</p>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('img/Foto kegiatan/pmr/pmr.jpg') }}" alt="gallery" onclick="openModal(this.src)">
                <div class="info">Palang Merah Remaja</div>
                <hr>
                <div class="icon">
                    <p>100</p>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('img/Foto kegiatan/WhatsApp Image 2025-04-10 at 10.08.45_73f81e3d.jpg') }}"
                    alt="gallery" onclick="openModal(this.src)">
                <div class="info">Futsal</div>
                <hr>
                <div class="icon">
                    <p>100</p>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('img/Foto kegiatan/WhatsApp Image 2025-04-10 at 10.12.23_5aa769f3.jpg') }}"
                    alt="gallery" onclick="openModal(this.src)">
                <div class="info">Pramuka</div>
                <hr>
                <div class="icon">
                    <p>100</p>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('img/Foto kegiatan/WhatsApp Image 2025-04-10 at 11.07.00_f5b300e5.jpg') }}"
                    alt="gallery" onclick="openModal(this.src)">
                <div class="info">Paskibra</div>
                <hr>
                <div class="icon">
                    <p>100</p>
                    <i class="bi bi-people-fill"></i>
                </div>
            </div>
        </div>
    </section>

    <section class="news" id="news">
        <div class="news-title">
            <h2>news</h2>
        </div>
        <div class="news-container">
            <ul class="news-list swiper-wrapper">
                <li class="news-item swiper-slide">
                    <a href="" class="news-link">
                        <img src="{{ asset('img/Foto kegiatan/Screenshot 2025-04-10 111237.png') }}" alt=""
                            class="news-img">
                    </a>
                </li>
                <li class="news-item swiper-slide">
                    <a href="" class="news-link">
                        <img src="{{ asset('img/Foto kegiatan/Screenshot 2025-04-10 111552.png') }}" alt=""
                            class="news-img">
                    </a>
                </li>
                <li class="news-item swiper-slide">
                    <a href="" class="news-link">
                        <img src="{{ asset('img/Foto kegiatan/Screenshot 2025-04-10 111638.png') }}" alt=""
                            class="news-img">
                    </a>
                </li>
                <li class="news-item swiper-slide">
                    <a href="" class="news-link">
                        <img src="{{ asset('img/Foto kegiatan/Screenshot 2025-04-10 112047.png') }}" alt=""
                            class="news-img">
                    </a>
                </li>
                <li class="news-item swiper-slide">
                    <a href="" class="news-link">
                        <img src="{{ asset('img/Foto kegiatan/Screenshot 2025-04-10 112102.png') }}" alt=""
                            class="news-img">
                    </a>
                </li>
            </ul>

        </div>
    </section>

    <!-- footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-info">
                <p>Copyright &copy; 2025 XII RPL 3 KELOMPOK 6.</p>
                <p>All rights reserved</p>
                <div class="social-icons">
                    <a href="https://www.instagram.com/softwethre19/" target="_blank"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://www.tiktok.com/@19engineers3" target="_blank"><i class="bi bi-tiktok"></i></a>
                    <a href="https://www.youtube.com/@rplsmkn2kotabekasi246" target="_blank"><i
                            class="bi bi-youtube"></i></a>
                    <a href="team"><i class="bi bi-people-fill"></i></a>
                </div>
            </div>

            <div class="footer-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.297567622083!2d106.9895416750389!3d-6.355513493634445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c22161d4051%3A0x7a0a35b288779341!2sSMKN%202%20Kota%20Bekasi!5e0!3m2!1sid!2sid!4v1739977806573!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgradeid" width="100%" height="200" style="border:0;"
                    allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </footer>

    <!-- Popup Modal -->
    <div id="imgModal" class="modal">
        <span class="close" onclick="closeModal()">&times;</span>
        <img class="modal-content" id="modalImg">
    </div>



    <!-- script aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- script swipe -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <!-- link js home -->
    <script src="js/home.js"></script>
</body>

</html>