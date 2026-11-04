<!DOCTYPE html>
<html lang="ka">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>მაღაზია</title>
<section class="hero"
style="background-image:url('{{ asset('images/pool.jp') }}');">
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial,sans-serif;
}

body{
    min-height:100vh;
    color: #0d3b66;
    overflow-x:hidden;
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


/* HERO */

.hero {
    height: 188vh;
    position: relative;
    background:#fff;
}


/* DARK OVERLAY */

body::before{
    content:'';
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.20);
    z-index:-1;
}

/* HEADER */

.header{
    width:95%;
    margin:auto;

    display:flex;
    justify-content:space-between;
    align-items:center;

    padding-top:25px;
}

/* SEARCH */

.search-box{
    width:290px;
    height:65px;

    background:rgba(255,255,255,0.15);

    backdrop-filter:blur(12px);

    border-radius:22px;

    display:flex;
    align-items:center;

    padding:0 20px;

    border:1px solid rgba(255,255,255,0.2);
}

.search-box input{
    width:100%;
    border:none;
    outline:none;
    background:none;
    color:white;
    font-size:18px;
}

.search-box input::placeholder{
    color:white;
}

/* TITLE */

.center-title{
    text-align:center;
}

.center-title h1{
    font-size:72px;
    font-weight:bold;
}

.center-title p{
    margin-top:10px;
    font-size:22px;
}

/* RIGHT */

.right-menu{
    display:flex;
    align-items:center;
    gap:20px;
}

/* CART */

.cart-btn{
    position:relative;

    background:#2dd8f3;

    color:#063451;

    text-decoration:none;

    padding:18px 35px;

    border-radius:22px;

    font-size:22px;

    font-weight:bold;

    transition:0.3s;
}

.cart-btn:hover{
    transform:scale(1.05);
}

.cart-count{
    position:absolute;

    top:-8px;
    right:-8px;

    width:30px;
    height:30px;

    background:#2979ff;

    color:white;

    border-radius:50%;

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:14px;
}

/* MENU */

.menu-btn{
    width:65px;
    height:65px;

    border-radius:50%;

    background:rgba(255,255,255,0.18);

    backdrop-filter:blur(12px);

    display:flex;
    align-items:center;
    justify-content:center;

    font-size:30px;
}

/* PRODUCTS */

.products-wrapper{

    width:95%;

    margin:auto;

    margin-top:50px;

    display:grid;

    grid-template-columns:repeat(5,1fr);

    gap:25px;
}

/* CARD */

.product-card{

    background:rgba(255,255,255,0.18);

    backdrop-filter:blur(15px);

    border-radius:32px;

    padding:18px;

    border:1px solid rgba(255,255,255,0.2);

    transition:0.4s;

    display:flex;

    flex-direction:column;

    justify-content:space-between;

    min-height:540px;
}

.product-card:hover{

    transform:translateY(-10px);

    box-shadow:0 15px 35px rgba(0,0,0,0.35);
}

/* IMAGE */

.product-card img{

    width:100%;

    height:240px;

    object-fit:cover;

    border-radius:22px;
}

/* TITLE */

.product-card h3{

    margin-top:18px;

    font-size:22px;

    line-height:1.4;

    min-height:95px;
}

/* PRICE */

.price{

    font-size:28px;

    font-weight:bold;

    margin-top:15px;
}

/* STOCK */

.stock{

    margin-top:12px;

    color:#8fff8f;

    font-size:18px;
}

/* BUTTON */

.add-btn{

    margin-top:20px;

    width:100%;

    border:none;

    padding:16px;

    border-radius:18px;

    background:linear-gradient(45deg,#1e90ff,#005eff,#063451);

    color:white;

    font-size:17px;

    cursor:pointer;

    transition:0.3s;
}

.add-btn:hover{

    transform:scale(1.03);
}

/* BOTTOM BAR */

.bottom-bar{

    width:95%;

    margin:45px auto;

    background:rgba(255,255,255,0.18);

    backdrop-filter:blur(15px);

    border-radius:28px;

    padding:25px;

    display:grid;

    grid-template-columns:repeat(4,1fr);

    gap:20px;
}

.bottom-item{
    text-align:center;
}

.bottom-item h3{
    margin-top:12px;
    font-size:21px;
}

.bottom-item p{
    margin-top:10px;
    opacity:0.9;
}

/* RESPONSIVE */

@media(max-width:1400px){

    .products-wrapper{
        grid-template-columns:repeat(4,1fr);
    }

}

@media(max-width:1100px){

    .products-wrapper{
        grid-template-columns:repeat(3,1fr);
    }

}

@media(max-width:850px){

    .products-wrapper{
        grid-template-columns:repeat(2,1fr);
    }

    .header{
        flex-direction:column;
        gap:20px;
    }

    .center-title h1{
        font-size:45px;
    }

    .bottom-bar{
        grid-template-columns:1fr;
    }

}

@media(max-width:600px){

    .products-wrapper{
        grid-template-columns:1fr;
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
                <a href="{{ url('/contact') }}">კონტაქტი</a>
            </li>

        </ul>

        <a href="{{ url('/contact') }}" class="contact-btn">
            დაიწყეთ თქვენი პროექტი
        </a>

    </nav>


<!-- HEADER -->

<div class="header">

    <!-- SEARCH -->

    <div class="search-box">

        <input type="text" placeholder="ძებნა...">

    </div>

    <!-- TITLE -->

    <div class="center-title">

        <h1>მაღაზია</h1>

        <p>ყველაფერი თქვენი აუზისთვის</p>

    </div>

    <!-- RIGHT MENU -->

    <div class="right-menu">

        @php
            $cart = session()->get('cart', []);
            $count = count($cart);
        @endphp

        <a href="{{ route('cart.index') }}" class="cart-btn">

            🛒 კალათა

            <span class="cart-count">
                {{ $count }}
            </span>

        </a>

        <div class="menu-btn">
            ☰
        </div>

    </div>

</div>

<!-- PRODUCTS -->

<div class="products-wrapper">

@foreach($products as $product)

<div class="product-card">

    <div>

        <img src="{{ asset('storage/'.$product->image) }}">

        <h3>

            {{ Str::limit($product->name, 55) }}

        </h3>

    </div>

    <div>

        <div class="price">

            {{ $product->price }} ₾

        </div>

        @if($product->stock > 0)

            <div class="stock">

                მარაგში

            </div>

        @else

            <div class="stock" style="color:red;">

                არ არის მარაგში

            </div>

        @endif

        <form action="{{ route('cart.add',$product->id) }}" method="POST">

            @csrf

            <button class="add-btn">

                🛒 კალათაში დამატება

            </button>

        </form>

    </div>

</div>

@endforeach

</div>

<!-- BOTTOM BAR -->

<div class="bottom-bar">

    <div class="bottom-item">

        🚚

        <h3>უფასო მიწოდება</h3>

        <p>100₾-ზე მეტი შეკვეთებზე</p>

    </div>

    <div class="bottom-item">

        🛡️

        <h3>გარანტია</h3>

        <p>1 წლის ოფიციალური გარანტია</p>

    </div>

    <div class="bottom-item">

        🕒

        <h3>სწრაფი მიწოდება</h3>

        <p>24/7 მომსახურება</p>

    </div>

    <div class="bottom-item">

        🔄

        <h3>დაბრუნება</h3>

        <p>14 დღის განმავლობაში</p>

    </div>

</div>

</body>
</html>