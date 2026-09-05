<!DOCTYPE html>
<html lang="ka">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ALPANA POOL — გალერეა</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Outfit', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background: #f4fbff;
            color: #0d3b66;
            overflow-x: hidden;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            position: relative;
            width: 100%;

            display: flex;
            justify-content: space-between;
            align-items: center;

            padding: 28px 7%;

            background: #0d3b66;

            z-index: 100;
        }


        /* LOGO */

        .logo {
            color: white;

            font-size: 38px;
            font-weight: 800;

            letter-spacing: 2px;

            text-decoration: none;
        }

        .logo span {
            color: #2dd8f3;
        }


        /* MENU */

        .menu {
            display: flex;
            align-items: center;

            gap: 40px;

            list-style: none;
        }

        .menu a {
            position: relative;

            color: white;

            text-decoration: none;

            font-size: 17px;
            font-weight: 500;

            transition: .3s;
        }

        .menu a::after {
            content: "";

            position: absolute;

            left: 0;
            bottom: -8px;

            width: 0;
            height: 2px;

            background: #2dd8f3;

            transition: .3s;
        }

        .menu a:hover {
            color: #2dd8f3;
        }

        .menu a:hover::after {
            width: 100%;
        }


        /* CONTACT BUTTON */

        .contact-btn {
            display: inline-block;

            padding: 13px 24px;

            border-radius: 30px;

            background: #2dd8f3;

            color: #063451;

            text-decoration: none;

            font-size: 15px;
            font-weight: 700;

            transition: .3s;

            white-space: nowrap;
        }

        .contact-btn:hover {
            background: white;

            transform: translateY(-2px);

            box-shadow: 0 8px 25px rgba(45, 216, 243, .25);
        }


        /* =========================
           GALLERY SECTION
        ========================= */

        .gallery-section {
            padding: 90px 7% 120px;

            min-height: calc(100vh - 100px);
        }


        /* HEADER */

        .gallery-header {
            text-align: center;

            margin-bottom: 60px;
        }

        .gallery-header span {
            display: block;

            color: #2dd8f3;

            font-size: 15px;

            font-weight: 700;

            letter-spacing: 3px;

            text-transform: uppercase;

            margin-bottom: 12px;
        }

        .gallery-header h2 {
            font-size: 52px;

            line-height: 1.1;

            color: #0d3b66;

            font-weight: 700;
        }

        .gallery-header p {
            max-width: 650px;

            margin: 18px auto 0;

            color: #6c7a89;

            font-size: 17px;

            line-height: 1.7;
        }


        /* =========================
           GALLERY GRID
        ========================= */

        .gallery-grid {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            grid-auto-rows: 260px;

            gap: 22px;

            max-width: 1500px;

            margin: 0 auto;
        }


        /* =========================
           GALLERY ITEM
        ========================= */

        .gallery-item {
            position: relative;

            overflow: hidden;

            border-radius: 24px;

            cursor: pointer;

            background: #dceff7;

            box-shadow:
                0 12px 35px rgba(13, 59, 102, .12);

            transition: .4s;
        }

        .gallery-item:hover {
            transform: translateY(-5px);

            box-shadow:
                0 20px 45px rgba(13, 59, 102, .20);
        }


        /* =========================
           IMAGE
        ========================= */

        .gallery-item img {
            width: 100%;
            height: 100%;

            display: block;

            object-fit: cover;

            transition: transform .6s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }


        /* =========================
           OVERLAY
        ========================= */

        .gallery-item::before {
            content: "🔍  იხილეთ ფოტო";

            position: absolute;

            inset: 0;

            display: flex;

            justify-content: center;
            align-items: center;

            background: rgba(5, 38, 65, .55);

            color: white;

            font-size: 19px;

            font-weight: 600;

            opacity: 0;

            transition: .4s;

            z-index: 2;

            backdrop-filter: blur(2px);

            /* ძალიან მნიშვნელოვანია */
            pointer-events: none;
        }

        .gallery-item:hover::before {
            opacity: 1;
        }


        /* =========================
           GRID SIZES
        ========================= */

        .large {
            grid-column: span 2;
        }

        .wide {
            grid-column: span 2;
        }

        .tall {
            grid-row: span 2;
        }


        /* =========================
           LIGHTBOX
        ========================= */

        .lightbox {
            position: fixed;

            inset: 0;

            display: none;

            justify-content: center;
            align-items: center;

            background: rgba(2, 18, 30, .96);

            z-index: 9999;

            padding: 30px;

            animation: fadeIn .25s ease;

            cursor: zoom-out;
        }

        .lightbox.active {
            display: flex;
        }


        /* BIG IMAGE */

        .lightbox img {
            max-width: 92vw;
            max-height: 88vh;

            width: auto;
            height: auto;

            object-fit: contain;

            border-radius: 18px;

            box-shadow:
                0 20px 80px rgba(0, 0, 0, .5);

            animation: zoomIn .3s ease;

            cursor: default;
        }


        /* =========================
           CLOSE BUTTON
        ========================= */

        .close {
            position: absolute;

            top: 25px;
            right: 35px;

            width: 50px;
            height: 50px;

            display: flex;

            justify-content: center;
            align-items: center;

            border-radius: 50%;

            background: rgba(255, 255, 255, .12);

            color: white;

            font-size: 38px;

            line-height: 1;

            cursor: pointer;

            transition: .3s;

            z-index: 10;
        }

        .close:hover {
            background: #2dd8f3;

            color: #063451;

            transform: rotate(90deg);
        }


        /* =========================
           ANIMATIONS
        ========================= */

        @keyframes fadeIn {

            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }

        }

        @keyframes zoomIn {

            from {
                transform: scale(.85);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }

        }


        /* =========================
           FOOTER
        ========================= */

        footer {
            margin-top: 0;

            background:
                linear-gradient(
                    135deg,
                    #02152f,
                    #032c7c,
                    #061f52
                );

            color: #ffffff;

            padding: 80px 20px 35px;

            text-align: center;

            position: relative;

            overflow: hidden;
        }


        /* დეკორატიული წყლის ეფექტი */

        footer::before {
            content: "";

            position: absolute;

            width: 500px;
            height: 500px;

            border-radius: 50%;

            background: rgba(53, 214, 255, 0.08);

            top: -350px;
            right: -150px;
        }

        footer::after {
            content: "";

            position: absolute;

            width: 400px;
            height: 400px;

            border-radius: 50%;

            background: rgba(53, 214, 255, 0.05);

            bottom: -300px;
            left: -150px;
        }


        .footer-container {
            position: relative;

            z-index: 1;

            max-width: 850px;

            margin: auto;
        }


        .footer-container h2 {
            color: #ffffff;

            font-size: 42px;

            font-weight: 800;

            letter-spacing: 3px;

            margin: 0 0 20px;
        }

        .footer-container h2::first-letter {
            color: #35d6ff;
        }


        .footer-container p {
            color: #ffffff;

            font-size: 16px;

            line-height: 1.8;

            max-width: 700px;

            margin: 0 auto;

            opacity: 0.9;
        }


        /* FOOTER LINKS */

        .footer-links {
            margin: 40px 0;

            display: flex;

            justify-content: center;

            gap: 35px;

            flex-wrap: wrap;
        }

        .footer-links a {
            color: #ffffff;

            text-decoration: none;

            font-size: 16px;

            transition: 0.3s ease;
        }

        .footer-links a:hover {
            color: #35d6ff;

            transform: translateY(-3px);
        }


        /* COPYRIGHT */

        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.2);

            padding-top: 25px;

            font-size: 14px !important;

            color: #ffffff !important;

            opacity: 0.75 !important;
        }


        /* =========================
           TABLET
        ========================= */

        @media (max-width: 1100px) {

            .navbar {
                padding: 25px 5%;
            }

            .menu {
                gap: 25px;
            }

            .menu a {
                font-size: 15px;
            }

            .contact-btn {
                padding: 11px 18px;

                font-size: 14px;
            }

            .gallery-grid {
                grid-template-columns: repeat(2, 1fr);

                grid-auto-rows: 240px;
            }

        }


        /* =========================
           TABLET / MOBILE
        ========================= */

        @media (max-width: 768px) {

            .navbar {
                flex-direction: column;

                gap: 25px;

                padding: 25px 20px;
            }

            .logo {
                font-size: 32px;
            }

            .menu {
                flex-wrap: wrap;

                justify-content: center;

                gap: 18px 25px;
            }

            .menu a {
                font-size: 15px;
            }

            .contact-btn {
                display: none;
            }


            .gallery-section {
                padding: 60px 20px 80px;
            }

            .gallery-header {
                margin-bottom: 40px;
            }

            .gallery-header h2 {
                font-size: 38px;
            }

            .gallery-header p {
                font-size: 15px;
            }


            .gallery-grid {
                grid-template-columns: 1fr;

                grid-auto-rows: 260px;

                gap: 16px;
            }

            .large,
            .wide {
                grid-column: span 1;
            }

            .tall {
                grid-row: span 1;
            }


            /* LIGHTBOX MOBILE */

            .lightbox {
                padding: 15px;
            }

            .lightbox img {
                max-width: 95vw;

                max-height: 85vh;

                border-radius: 12px;
            }


            .close {
                top: 15px;

                right: 18px;

                width: 45px;

                height: 45px;

                font-size: 32px;
            }


            footer {
                padding: 60px 20px 30px;
            }

            .footer-container h2 {
                font-size: 32px;
            }

            .footer-container p {
                font-size: 14px;
            }

            .footer-links {
                gap: 20px;
            }

        }

    </style>

</head>


<body>


    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar">

        <a href="/" class="logo">
            <span>AL</span>PANA
        </a>


        <ul class="menu">

            <li>
                <a href="/pool">მთავარი</a>
            </li>

            <li>
                <a href="{{ url('/shop') }}">სერვისები</a>
            </li>

            <li>
                <a href="{{ url('/news') }}">სიახლე</a>
            </li>

            <li>
                <a href="{{ url('/gallery') }}">გალერეა</a>
            </li>

            <li>
                <a href="#contact">კონტაქტი</a>
            </li>

        </ul>


        <a href="#contact" class="contact-btn">
            დაიწყეთ თქვენი პროექტი
        </a>

    </nav>



    <!-- =========================
         GALLERY
    ========================= -->

    <section class="gallery-section">

        <div class="gallery-header">

            <span>ALPANA POOL</span>

            <h2>
                ჩვენი გალერეა
            </h2>

            <p>
                დაათვალიერეთ ჩვენი შესრულებული პროექტები
                და ნახეთ ALPANA POOL-ის ხარისხი.
            </p>

        </div>


        <!-- GALLERY GRID -->

        <div class="gallery-grid">


            <!-- PHOTO 1 -->

            <div class="gallery-item large">

                <img
                    src="{{ asset('images/pool1.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>



            <!-- PHOTO 2 -->

            <div class="gallery-item">

                <img
                    src="{{ asset('images/23.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>



            <!-- PHOTO 3 -->

            <div class="gallery-item">

                <img
                    src="{{ asset('images/557.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>



            <!-- PHOTO 4 -->

            <div class="gallery-item tall">

                <img
                    src="{{ asset('images/555.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>



            <!-- PHOTO 5 -->

            <div class="gallery-item">

                <img
                    src="{{ asset('images/556.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>



            <!-- PHOTO 6 -->

            <div class="gallery-item wide">

                <img
                    src="{{ asset('images/556.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>

            <!-- PHOTO 7 -->

            <div class="gallery-item wide">

                <img
                    src="{{ asset('images/556.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>

            <!-- PHOTO 5 -->

            <div class="gallery-item">

                <img
                    src="{{ asset('images/556.jpg') }}"
                    alt="ALPANA POOL პროექტი"
                >

            </div>




        </div>

    </section>



    <!-- =========================
         LIGHTBOX
    ========================= -->

    <div class="lightbox" id="lightbox">

        <span class="close" id="close">
            &times;
        </span>

        <img
            id="lightbox-img"
            src=""
            alt="Gallery Image"
        >

    </div>



    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script>

        /* =========================
           ELEMENTS
        ========================= */

        const galleryImages =
            document.querySelectorAll('.gallery-item img');

        const lightbox =
            document.getElementById('lightbox');

        const lightboxImg =
            document.getElementById('lightbox-img');

        const closeBtn =
            document.getElementById('close');


        /* =========================
           OPEN IMAGE
        ========================= */

        galleryImages.forEach(function(img) {

            img.addEventListener('click', function() {

                lightboxImg.src = img.src;

                lightbox.classList.add('active');

                document.body.style.overflow = 'hidden';

            });

        });


        /* =========================
           CLOSE BUTTON
        ========================= */

        closeBtn.addEventListener('click', function() {

            closeLightbox();

        });


        /* =========================
           CLOSE BACKGROUND
        ========================= */

        lightbox.addEventListener('click', function(e) {

            if (e.target === lightbox) {

                closeLightbox();

            }

        });


        /* =========================
           ESC KEY
        ========================= */

        document.addEventListener('keydown', function(e) {

            if (e.key === 'Escape') {

                closeLightbox();

            }

        });


        /* =========================
           CLOSE FUNCTION
        ========================= */

        function closeLightbox() {

            lightbox.classList.remove('active');

            document.body.style.overflow = '';

            /* სურათის გასუფთავება */
            setTimeout(function() {

                lightboxImg.src = '';

            }, 300);

        }

    </script>



    <!-- =========================
         FOOTER
    ========================= -->

    <footer id="contact">

        <div class="footer-container">

            <h2>
                ALPANA POOL
            </h2>

            <p>
                პროფესიონალური საცურაო აუზის მშენებლობა,
                რემონტი, მოვლა-პატრონობა და ექსპერტული
                კონსულტაცია.
            </p>


            <div class="footer-links">

                <a href="/pool">
                    მთავარი
                </a>

                <a href="/gallery">
                    გალერეა
                </a>

                <a href="/shop">
                    სერვისები
                </a>

                <a href="/news">
                    სიახლე
                </a>

            </div>


            <p class="copyright">

                © {{ date('Y') }}
                ALPANA POOL.
                All Rights Reserved.

            </p>

        </div>

    </footer>


</body>

</html>