
<!DOCTYPE html>
<html lang="ka">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>კონტაქტი | ALPANA POOL</title>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Outfit', sans-serif;
}

body {
    background: #050b12;
    color: white;
    overflow-x: hidden;
}

/* NAVBAR */

.navbar {
    width: 100%;
    height: 100px;
    padding: 0 6%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    background: #03070b;
}

.logo {
    font-size: 43px;
    font-weight: 800;
    color: white;
    text-decoration: none;
}

.logo span {
    color: #2dd8f3;
}

.menu {
    display: flex;
    gap: 42px;
    list-style: none;
}

.menu a {
    text-decoration: none;
    color: white;
    font-size: 17px;
    transition: .3s;
}

.menu a:hover,
.menu a.active {
    color: #2dd8f3;
}

.nav-btn {
    background: #2dd8f3;
    color: #00121a;
    padding: 17px 30px;
    border-radius: 40px;
    text-decoration: none;
    font-weight: 700;
    transition: .3s;
}

.nav-btn:hover {
    background: white;
    transform: translateY(-3px);
}

/* HERO */

.hero {
    min-height: 420px;
    display: flex;
    align-items: center;
    padding: 70px 7%;
    background:
    linear-gradient(90deg, rgba(2,12,22,.95), rgba(2,12,22,.65)),
    url('/images/pool.jpg');

    background-size: cover;
    background-position: center;
}

.hero-content {
    max-width: 750px;
}

.hero small {
    color: #2dd8f3;
    font-size: 16px;
    letter-spacing: 4px;
    font-weight: 600;
}

.hero h1 {
    font-size: clamp(42px, 6vw, 72px);
    margin: 20px 0;
    line-height: 1.1;
}

.hero h1 span {
    color: #2dd8f3;
}

.hero p {
    color: #c5d0d8;
    font-size: 18px;
    line-height: 1.8;
    max-width: 600px;
}

/* CONTACT SECTION */

.contact-section {
    padding: 100px 7%;
    background: #07111b;
}

.section-heading {
    text-align: center;
    margin-bottom: 65px;
}

.section-heading small {
    color: #2dd8f3;
    letter-spacing: 4px;
    font-weight: 700;
}

.section-heading h2 {
    font-size: 42px;
    margin: 15px 0;
}

.section-heading p {
    color: #9eabb7;
    font-size: 17px;
}

.contact-wrapper {
    max-width: 1250px;
    margin: auto;
    display: grid;
    grid-template-columns: 0.85fr 1.15fr;
    gap: 35px;
}

/* INFO CARDS */

.contact-info {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.info-card {
    background: #101f2d;
    border: 1px solid rgba(45,216,243,.12);
    padding: 30px;
    border-radius: 18px;
    transition: .35s;
}

.info-card:hover {
    transform: translateY(-5px);
    border-color: #2dd8f3;
}

.info-icon {
    width: 55px;
    height: 55px;
    border-radius: 14px;
    background: rgba(45,216,243,.13);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #2dd8f3;
    font-size: 25px;
    margin-bottom: 20px;
}

.info-card h3 {
    font-size: 21px;
    margin-bottom: 10px;
}

.info-card p,
.info-card a {
    color: #aab9c6;
    font-size: 16px;
    text-decoration: none;
    line-height: 1.7;
}

.info-card a:hover {
    color: #2dd8f3;
}

/* FORM */

.contact-form {
    background: #101f2d;
    border: 1px solid rgba(45,216,243,.12);
    padding: 45px;
    border-radius: 20px;
}

.contact-form h2 {
    font-size: 30px;
    margin-bottom: 12px;
}

.contact-form > p {
    color: #aab9c6;
    margin-bottom: 30px;
}

.form-group {
    margin-bottom: 22px;
}

.form-group label {
    display: block;
    margin-bottom: 10px;
    font-size: 15px;
    color: #d8e5ed;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 17px;
    background: #07111b;
    border: 1px solid #263c4d;
    border-radius: 10px;
    color: white;
    font-size: 16px;
    outline: none;
    transition: .3s;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #2dd8f3;
    box-shadow: 0 0 12px rgba(45,216,243,.12);
}

.form-group textarea {
    height: 145px;
    resize: vertical;
}

.submit-btn {
    width: 100%;
    padding: 18px;
    border: none;
    border-radius: 40px;
    background: #2dd8f3;
    color: #00121a;
    font-size: 17px;
    font-weight: 800;
    cursor: pointer;
    transition: .3s;
}

.submit-btn:hover {
    background: white;
    transform: translateY(-3px);
}

/* BOTTOM BANNER */

.contact-banner {
    margin-top: 75px;
    padding: 55px 30px;
    text-align: center;
    background: linear-gradient(120deg, #073d59, #087e9b);
    border-radius: 20px;
}

.contact-banner h2 {
    font-size: 32px;
    margin-bottom: 15px;
}

.contact-banner p {
    color: #d4f7ff;
    margin-bottom: 25px;
}

.contact-banner a {
    display: inline-block;
    padding: 16px 35px;
    background: white;
    color: #003044;
    border-radius: 40px;
    text-decoration: none;
    font-weight: 800;
    transition: .3s;
}

.contact-banner a:hover {
    background: #2dd8f3;
    transform: translateY(-3px);
}

/* FOOTER */

footer {
    background: #02070c;
    padding: 40px 7%;
    text-align: center;
    color: #82919e;
}

footer h2 {
    color: white;
    font-size: 28px;
    margin-bottom: 12px;
}

footer h2 span {
    color: #2dd8f3;
}

footer p {
    line-height: 1.8;
}

/* ANIMATION */

.info-card,
.contact-form,
.contact-banner {
    animation: appear .8s ease both;
}

@keyframes appear {
    from {
        opacity: 0;
        transform: translateY(25px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* MOBILE */

@media(max-width: 950px) {

    .navbar {
        height: auto;
        padding: 25px 5%;
        flex-wrap: wrap;
        gap: 20px;
    }

    .menu {
        gap: 18px;
        flex-wrap: wrap;
    }

    .nav-btn {
        display: none;
    }

    .contact-wrapper {
        grid-template-columns: 1fr;
    }

}

@media(max-width: 600px) {

    .navbar {
        justify-content: center;
    }

    .logo {
        font-size: 35px;
    }

    .menu {
        justify-content: center;
        gap: 15px;
    }

    .menu a {
        font-size: 14px;
    }

    .hero {
        min-height: 350px;
        padding: 50px 6%;
    }

    .hero h1 {
        font-size: 43px;
    }

    .contact-section {
        padding: 65px 5%;
    }

    .section-heading h2 {
        font-size: 32px;
    }

    .contact-form {
        padding: 25px 20px;
    }

    .contact-banner h2 {
        font-size: 25px;
    }

}

</style>
</head>

<body>

<!-- NAVBAR -->

<nav class="navbar">

    <a href="/pool" class="logo">
        <span>AL</span>PANA
    </a>

    <ul class="menu">
        <li><a href="/pool">მთავარი</a></li>
        <li><a href="/shop">სერვისები</a></li>
        <li><a href="/news">სიახლე</a></li>
        <li><a href="/gallery">გალერეა</a></li>
        <li><a href="/contact" class="active">კონტაქტი</a></li>
    </ul>

    <a href="#contact-form" class="nav-btn">
        დაგვიკავშირდით
    </a>

</nav>


<!-- HERO -->

<section class="hero">

    <div class="hero-content">

        <small>ALPANA POOL / CONTACT</small>

        <h1>
            მოდით ერთად<br>
            <span>შევქმნათ იდეალური აუზი.</span>
        </h1>

        <p>
            გაქვთ შეკითხვა ან გეგმავთ ახალი აუზის მშენებლობას?
            დაგვიკავშირდით და ჩვენი გუნდი დაგეხმარებათ
            თქვენი იდეის განხორციელებაში.
        </p>

    </div>

</section>


<!-- CONTACT -->

<section class="contact-section">

    <div class="section-heading">

        <small>GET IN TOUCH</small>

        <h2>დაგვიკავშირდით</h2>

        <p>
            ჩვენ მზად ვართ ვუპასუხოთ თქვენს ყველა შეკითხვას.
        </p>

    </div>


    <div class="contact-wrapper">


        <!-- CONTACT INFORMATION -->

        <div class="contact-info">

            <div class="info-card">

                <div class="info-icon">☎</div>

                <h3>ტელეფონი</h3>

                <a href="tel:+995555232338">
                    +995 555 23 23 38
                </a>

            </div>


            <div class="info-card">

                <div class="info-icon">✉</div>

                <h3>ელექტრონული ფოსტა</h3>

                <p>
                    მოგვწერეთ WhatsApp-ის საშუალებით
                    ან გამოიყენეთ საკონტაქტო ფორმა.
                </p>

            </div>


            <div class="info-card">

                <div class="info-icon">◉</div>

                <h3>ჩვენი მომსახურება</h3>

                <p>
                    საცურაო აუზების მშენებლობა,
                    რემონტი, მოვლა-პატრონობა
                    და პროფესიონალური კონსულტაცია.
                </p>

            </div>


            <div class="info-card">

                <div class="info-icon">✓</div>

                <h3>პროფესიონალური გუნდი</h3>

                <p>
                    თქვენი პროექტისთვის ხარისხიანი
                    და საიმედო გადაწყვეტილებები.
                </p>

            </div>

        </div>


        <!-- CONTACT FORM -->

        <div class="contact-form" id="contact-form">

            <h2>მოგვწერეთ</h2>

            <p>
                შეავსეთ ფორმა და გამოგვიგზავნეთ
                თქვენი შეტყობინება WhatsApp-ზე.
            </p>

            <form id="messageForm">

                <div class="form-group">

                    <label>თქვენი სახელი</label>

                    <input
                        type="text"
                        id="name"
                        placeholder="შეიყვანეთ სახელი"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>ტელეფონის ნომერი</label>

                    <input
                        type="tel"
                        id="phone"
                        placeholder="შეიყვანეთ ნომერი"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>შეტყობინება</label>

                    <textarea
                        id="message"
                        placeholder="მოგვწერეთ თქვენი შეკითხვა..."
                        required
                    ></textarea>

                </div>


                <button type="submit" class="submit-btn">
                    შეტყობინების გაგზავნა →
                </button>

            </form>

        </div>

    </div>


    <!-- BANNER -->

    <div class="contact-banner">

        <h2>გაქვთ აუზის აშენების იდეა?</h2>

        <p>
            დაგვიკავშირდით დღესვე და ერთად დავგეგმოთ თქვენი პროექტი.
        </p>

        <a href="https://wa.me/995555232338" target="_blank">
            მოგვწერეთ WhatsApp-ზე
        </a>

    </div>

</section>


<!-- FOOTER -->

<footer>

    <h2><span>AL</span>PANA POOL</h2>

    <p>
        პროფესიონალური საცურაო აუზის მშენებლობა,
        რემონტი, მოვლა-პატრონობა და ექსპერტული კონსულტაცია.
    </p>

    <p style="margin-top:20px;">
        © 2026 ALPANA POOL. ყველა უფლება დაცულია.
    </p>

</footer>


<!-- WHATSAPP FORM -->

<script>

document.getElementById('messageForm').addEventListener('submit', function(e) {

    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!name || !phone || !message) {
        return;
    }

    const text =
        "გამარჯობა ALPANA POOL!%0A%0A" +
        "სახელი: " + encodeURIComponent(name) + "%0A" +
        "ტელეფონი: " + encodeURIComponent(phone) + "%0A" +
        "შეტყობინება: " + encodeURIComponent(message);

    window.open(
        "https://wa.me/995555232338?text=" + text,
        "_blank"
    );

});

</script>

</body>
</html>
