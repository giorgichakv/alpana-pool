<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pool News | ALPANA POOL</title>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Outfit',sans-serif;
}

html{
    scroll-behavior:smooth;
}

body{
    background:#edf7fb;
    color:#1d1d1d;
    overflow-x:hidden;
}

/* ===========================
   NAVBAR
=========================== */

header{
    position:fixed;
    width:100%;
    top:0;
    left:0;
    z-index:999;
    padding:22px 7%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    transition:.4s;
}

header.scrolled{
    background:rgba(7,23,40,.85);
    backdrop-filter:blur(18px);
}

.logo{
    font-size:34px;
    font-weight:800;
    color:#fff;
    text-decoration:none;
}

.logo span{
    color:#2dd8f3;
}

nav{
    display:flex;
    gap:35px;
}

nav a{
    color:white;
    text-decoration:none;
    font-weight:500;
    transition:.3s;
}

nav a:hover{
    color:#2dd8f3;
}

.contact-btn{
    padding:14px 28px;
    border-radius:40px;
    background:#2dd8f3;
    color:white;
    text-decoration:none;
    font-weight:600;
}

/* ===========================
   HERO
=========================== */

.hero{

    height:100vh;

    background:url('/images/pool.jpg') center/cover no-repeat;

    position:relative;

    display:flex;

    justify-content:center;

    align-items:center;

    text-align:center;

}

.hero::before{

content:"";

position:absolute;

inset:0;

background:rgba(0,0,0,.58);

}

.hero-content{

position:relative;

z-index:5;

max-width:900px;

padding:20px;

}

.hero-content small{

color:#2dd8f3;

font-size:15px;

letter-spacing:5px;

font-weight:600;

}

.hero-content h1{

font-size:82px;

color:#fff;

margin:20px 0;

}

.hero-content p{

color:#ddd;

font-size:20px;

line-height:1.9;

max-width:700px;

margin:auto;

}

/* SEARCH */

.search{

margin-top:55px;

display:flex;

background:white;

border-radius:60px;

overflow:hidden;

box-shadow:0 20px 60px rgba(0,0,0,.18);

}

.search input{

flex:1;

padding:22px 30px;

border:none;

outline:none;

font-size:17px;

}

.search button{

width:180px;

border:none;

background:#2dd8f3;

color:white;

font-size:16px;

cursor:pointer;

transition:.3s;

}

.search button:hover{

background:#00bfff;

}

/* SECTION */

.container{

width:90%;

max-width:1400px;

margin:auto;

padding:100px 0;

}

.section-title{

text-align:center;

margin-bottom:70px;

}

.section-title span{

color:#2dd8f3;

font-weight:700;

letter-spacing:3px;

}

.section-title h2{

font-size:55px;

margin-top:20px;

}

.section-title p{

max-width:650px;

margin:20px auto;

line-height:1.8;

color:#666;

}
  
/* ===========================
    BLOG GRID
=========================== */

.news-grid{

display:grid;

grid-template-columns:repeat(auto-fit,minmax(360px,1fr));

gap:40px;

}

.news-card{

background:#fff;

border-radius:28px;

overflow:hidden;

box-shadow:0 18px 45px rgba(0,0,0,.08);

transition:.45s;

position:relative;

}

.news-card:hover{

transform:translateY(-12px);

box-shadow:0 30px 70px rgba(0,0,0,.15);

}

.news-card img{

width:100%;

height:260px;

object-fit:cover;

transition:.6s;

}

.news-card:hover img{

transform:scale(1.08);

}

.news-content{

padding:32px;

}

.badge{

display:inline-block;

padding:8px 18px;

border-radius:30px;

background:#2dd8f3;

color:white;

font-size:13px;

font-weight:600;

margin-bottom:18px;

}

.news-content h3{

font-size:30px;

line-height:1.3;

margin-bottom:18px;

}

.news-content p{

color:#666;

line-height:1.9;

margin-bottom:28px;

}

.news-bottom{

display:flex;

justify-content:space-between;

align-items:center;

}

.news-bottom span{

font-size:14px;

color:#888;

}

.news-bottom a{

text-decoration:none;

color:#2dd8f3;

font-weight:700;

}

.news-bottom a:hover{

letter-spacing:1px;

}

/* PAGINATION */

.pagination{

display:flex;

justify-content:center;

margin:90px 0;

gap:14px;

}

.pagination a,

.pagination span{

width:48px;

height:48px;

display:flex;

align-items:center;

justify-content:center;

border-radius:50%;

background:#fff;

text-decoration:none;

color:#222;

font-weight:600;

box-shadow:0 8px 20px rgba(0,0,0,.08);

}

.pagination .active{

background:#2dd8f3;

color:white;

}
</style>

<header>

<a href="/" class="logo">
ALPANA <span>POOL</span>
</a>

<nav>

<a href="/pool">მთავარი</a>
<a href="/gallery">გალერეა</a>
<a href="/shop">სერვისები</a>
<a href="/news">სიახლე</a>

</nav>

<a href="/contact" class="contact-btn">
კონტაქტი
</a>

</header>

<section class="hero">

<div class="hero-content">

<small>სიახლეების კატეგორია</small>

<h1>Pool news</h1>

<p>

გაეცანით საცურაო აუზებთან დაკავშირებულ უახლეს სიახლეებს, მოვლა-პატრონობის რჩევებს, მშენებლობის იდეებს და ექსპერტულ რჩევებს ALPANA POOL-ისგან.

</p>

<div class="search">

<input type="text" id="searchInput" placeholder="Search articles...">

<button>Search</button>

</div>

</div>

</section>

<section class="container">

<div class="section-title">

<span>უახლესი სტატიები</span>

<h2>საცურაო აუზის სიახლეები</h2>

<p>

გაეცანით პროფესიონალურ სტატიებს საცურაო აუზების, მოვლა-პატრონობისა და თანამედროვე მშენებლობის შესახებ

</p>

</div>

<div class="news-grid">

@foreach($blogs as $blog)

<div class="news-card">

<img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">

<div class="news-content">

<div class="badge">

Pool

</div>

<h3>{{ $blog->title }}</h3>

<p>

{{ Str::limit(strip_tags($blog->content),140) }}

</p>

<div class="news-bottom">

<span>

{{ $blog->created_at->format('d M Y') }}

</span>

<a href="#">

Read More →

</a>

</div>

</div>

</div>

@endforeach

</div>

</section>

@if($blogs instanceof \Illuminate\Contracts\Pagination\Paginator && $blogs->hasPages())

<div class="pagination">

    {{ $blogs->links() }}

</div>

@endif

<footer>

<div class="footer-container">

<h2>ALPANA POOL</h2>

<p>

პროფესიონალური საცურაო აუზის მშენებლობა, რემონტი, მოვლა-პატრონობა და ექსპერტული კონსულტაცია.

</p>

<div class="footer-links">

<a href="/pool">მთავარი</a>
<a href="/gallery">გალერეა</a>
<a href="/shop">სერვისები</a>
<a href="/news">სიახლე</a>

</div>

<p class="copyright">

© {{ date('Y') }} ALPANA POOL. All Rights Reserved.

</p>

</div>

</footer>

<style>


/* =========================
   FOOTER
========================= */

footer {
    margin-top: 120px;
    background: linear-gradient(135deg, #02152f, #032c7c, #061f52);
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

/* LINKS */

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
   MOBILE
========================= */

@media (max-width: 600px) {

    footer {
        margin-top: 70px;
        padding: 60px 20px 30px;
    }

    .footer-container h2 {
        font-size: 30px;
    }

    .footer-container p {
        font-size: 14px;
    }

    .footer-links {
        gap: 20px;
        flex-direction: column;
    }

    .footer-links a {
        font-size: 15px;
    }

}


/* =========================================
   TABLET
========================================= */

@media (max-width: 950px) {

    .footer-container {
        grid-template-columns: repeat(2, 1fr);
        gap: 50px;
    }

}


/* =========================================
   MOBILE
========================================= */

@media (max-width: 600px) {

    .footer {
        margin-top: 70px;
        padding: 60px 7% 0;
    }

    .footer-container {
        grid-template-columns: 1fr;
        gap: 40px;

        text-align: center;
    }

    .footer-logo {
        font-size: 28px;
    }

    .footer-brand p {
        margin: auto;
    }

    .footer-col h3::after {
        left: 50%;
        transform: translateX(-50%);
    }

    .footer-col ul a:hover {
        transform: none;
    }

    .footer {
    background: red !important;
}

}

/* ===========================
RESPONSIVE
=========================== */

@media(max-width:900px){

.hero-content h1{

font-size:48px;

}

nav{

display:none;

}

.search{

flex-direction:column;

border-radius:20px;

}

.search button{

width:100%;

height:65px;

}

.news-grid{

grid-template-columns:1fr;

}

.section-title h2{

font-size:38px;

}

}

</style>

<script>

/* Navbar */

window.addEventListener("scroll",()=>{

const header=document.querySelector("header");

header.classList.toggle("scrolled",window.scrollY>80);

});

/* Cards Animation */

const cards=document.querySelectorAll(".news-card");

const observer=new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.style.opacity="1";

entry.target.style.transform="translateY(0)";

}

});

},{threshold:.2});

cards.forEach(card=>{

card.style.opacity="0";

card.style.transform="translateY(60px)";

card.style.transition=".8s";

observer.observe(card);

});

/* Search */

const input=document.getElementById("searchInput");

if(input){

input.addEventListener("keyup",()=>{

let value=input.value.toLowerCase();

document.querySelectorAll(".news-card").forEach(card=>{

let title=card.querySelector("h3").innerText.toLowerCase();

let text=card.querySelector("p").innerText.toLowerCase();

card.style.display=(title.includes(value)||text.includes(value))
? "block"
: "none";

});

});

}

</script>

</body>
</html>