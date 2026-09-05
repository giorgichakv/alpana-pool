<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALPANA POOL</title>

    @vite(['resources/css/main.css', 'resources/js/site.js'])

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>

<!-- HERO -->
<section class="hero" style="background-image: url('{{ asset('images/pool.jpg') }}')">

    <nav class="navbar">
        <div class="logo">
            <span>AL</span>PANA
        </div>

        <ul class="menu">
            <li><a href="#">მთავარი</a></li>
            <li><a href="{{ url('/shop') }}">სერვისები</a></li>
            <li><a href="{{ url('/news') }}">სიახლე</a></li>
            <li><a href="{{ url('/gallery') }}">გალერეა</a></li>
            <li><a href="#">კონტაქტი</a></li>
        </ul>

        <a href="#" class="contact-btn">
            დაიწყეთ თქვენი პროექტი
        </a>
    </nav>

    <div class="hero-content">
        <div class="content">
            <h1>
                დიზაინი. აშენება. მოვლა.
                <br>
                <span>თქვენი იდეალური აუზი</span>
            </h1>

            <p>
                პროფესიონალური საცურაო აუზის მშენებლობა, მოვლა-პატრონობა და რემონტი.
                შექმნილია წლების განმავლობაში დასვენებისა და სიამოვნებისთვის.
            </p>

            <a href="#" class="hero-btn">დაიწყეთ თქვენი პროექტი</a>

            <div class="features">
                <div>✓ ლიცენზირებული & დაზღვეული</div>
                <div>✓ უმაღლესი ხარისხი</div>
                <div>✓ ხელმისაწვდომი ფასები</div>
            </div>
        </div>
    </div>

    <div class="phone-box">
        <img src="https://i.pravatar.cc/200" class="avatar">

        <div class="phone-text">
            <small>უფასო შემოწმება</small>
            <h2>+995 555 23 23 38</h2>
        </div>
    </div>

</section>

<!-- STATS -->
<section class="stats">

    <div class="stat-item">
        <div class="icon">🏆</div>
        <div>
            <h2>10+</h2>
            <p>წლიანი გამოცდილება</p>
        </div>
    </div>

    <div class="stat-item">
        <div class="icon">🏊</div>
        <div>
            <h2>1,500+</h2>
            <p>მომსახურებული აუზი</p>
        </div>
    </div>

    <div class="stat-item">
        <div class="icon">😊</div>
        <div>
            <h2>98%</h2>
            <p>მომხმარებელთა კმაყოფილება</p>
        </div>
    </div>

    <div class="stat-item">
        <div class="icon">✔</div>
        <div>
            <h2>Certified</h2>
            <p>ექსპერტი ტექნიკოსები</p>
        </div>
    </div>

</section>

<!-- BEFORE AFTER -->

  <div class="services-wrapper">

    <a href="{{ route('shop') }}" class="main-service-card">
        <div class="service-image">
            <img src="{{ asset('images/barr.jpg') }}" alt="საცურაო აუზის ბარი">
        </div>

        <div class="service-content">
            <span>01</span>
            <h4>საცურაო აუზის ბარი</h4>
            <p>თანამედროვე და კომფორტული სივრცე თქვენი აუზისთვის.</p>
            <div class="service-link">გაიგე მეტი <b>→</b></div>
        </div>
    </a>


    <a href="{{ route('shop') }}" class="main-service-card">
        <div class="service-image">
            <img src="{{ asset('images/hpp.jpg') }}" alt="Pool Supply Store">
        </div>

        <div class="service-content">
            <span>02</span>
            <h4>საცურაო აუზის მაღაზია</h4>
            <p>აუზისთვის საჭირო ხარისხიანი პროდუქცია და აქსესუარები.</p>
            <div class="service-link">გაიგე მეტი <b>→</b></div>
        </div>
    </a>


    <a href="{{ route('news') }}" class="main-service-card">
        <div class="service-image">
            <img src="{{ asset('images/hpp2.jpg') }}" alt="Pool News">
        </div>

        <div class="service-content">
            <span>03</span>
            <h4>საცურაო აუზის სიახლეები</h4>
            <p>რჩევები, ახალი ამბები და საინტერესო ინფორმაცია აუზების შესახებ.</p>
            <div class="service-link">გაიგე მეტი <b>→</b></div>
        </div>
    </a>

</div>  


</section>

<!-- SERVICES -->
<section class="services-section">

    <div class="overlay"></div>

    <div class="container">

        <span class="badge">ჩვენი მომსახურება</span>

        <h2>
            სრული გადაწყვეტილებები
            <span>ყველა საჭიროებისთვის</span>
        </h2>

        <p class="subtitle">
            კონცეფციიდან მოვლამდე, ჩვენ ვაკონტროლებთ ყველა დეტალს.
        </p>

        <div class="tabs">
            <button class="active">მშენებლობა</button>
            <button>რემონტი</button>
            <button>მოვლა</button>
            <button>წყლის მოვლა</button>
            <button>განახლება</button>
            <button>შემოწმება</button>
        </div>

        <div class="service-card">

            <div class="service-content">
                <h3>მშენებლობა</h3>

                <p>
                    ინდივიდუალური აუზების დიზაინი და მშენებლობა.
                </p>

                <ul>
                    <li>✓ ინდივიდუალური დიზაინი</li>
                    <li>✓ პრემიუმ მასალები</li>
                    <li>✓ თანამედროვე ფილტრაცია</li>
                </ul>
            </div>

            <div class="service-image">
                <img src="{{ asset('images/pool1.jpg') }}" alt="">
            </div>

        </div>

    </div>

</section>

<!-- WHY US -->
<section class="why-us">

    <div class="section-title">
        <span>რატომ ჩვენ</span>

        <h2>
            სანდო ექსპერტები
            <span>ხანგრძლივი შედეგისთვის</span>
        </h2>

        <p>
            მაღალი ხარისხის მომსახურება და პროფესიონალური გუნდი.
        </p>
    </div>

    <div class="why-features">

        <div class="feature">
            <div class="number">1</div>
            <div>
                <h3>სერტიფიცირებული გუნდი</h3>
                <p>პროფესიონალები გამოცდილებით.</p>
            </div>
        </div>

        <div class="feature">
            <div class="number">2</div>
            <div>
                <h3>სწრაფი მომსახურება</h3>
                <p>ეფექტური და დროული რეაგირება.</p>
            </div>
        </div>

        <div class="feature">
            <div class="number">3</div>
            <div>
                <h3>გამჭვირვალე ფასები</h3>
                <p>ფარული ხარჯების გარეშე.</p>
            </div>
        </div>

        <div class="feature">
            <div class="number">4</div>
            <div>
                <h3>გემრიელი კოქტეილები</h3>
                <p>ბარის პროფესიონალი გუნდი.</p>
            </div>
        </div>

        <div class="feature">
            <div class="number">5</div>
            <div>
                <h3>სუფთა წყალი</h3>
                <p>თანამედროვე ფილტრაციის სისტემა.</p>
            </div>
        </div>

        <div class="feature">
            <div class="number">6</div>
            <div>
                <h3>კომფორტი და ხარისხი.</h3>
                <p>უმაღლესი ხარისხი და კომფორტული გარემო.</p>
            </div>
        </div>

    </div>

</section>

<!-- FOOTER -->
<footer class="footer">

    <div class="footer-container">

        <div class="footer-col">
            <h2 class="footer-logo">ALPANA <span>POOL</span></h2>
            <p>პროფესიონალური აუზის მომსახურება.</p>
        </div>

        <div class="footer-col">
            <h3>კომპანია</h3>
            <ul>
                <li><a href="#">მთავარი</a></li>
                <li><a href="{{ url('/shop') }}">სერვისები</a></li>
                <li><a href="{{ url('/gallery') }}">გალერეა</a></li>
                <li><a href="#">კონტაქტი</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>სერვისები</h3>
            <ul>
                <li>მშენებლობა</li>
                <li>რემონტი</li>
                <li>მოვლა</li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>კონტაქტი</h3>
            <p>📍 საქართველო</p>
            <p>📞 +995 555 23 23 38</p>
            <p>✉️ info@alpanapool.com</p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 ALPANA POOL</p>
    </div>

</footer>

</body>
</html>