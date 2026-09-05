<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>კალათა</title>

     <!-- HERO -->
<section class="hero" style="background-image: url('{{ asset('images/snl.jpg') }}')">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            min-height:100vh;
            color:white;
            overflow-x:hidden;
        }

        /* HERO */

        .hero {
            height: 100vh;
            position: relative;
            background-image: url('/images/pool.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }


        /* OVERLAY */

        body::before{
            content:'';
            position:fixed;
            width:100%;
            height:100%;
            background:rgba(0,0,0,0.30);
            z-index:-1;
        }

        /* CONTAINER */

        .container{
            width:90%;
            max-width:1200px;
            margin:auto;
            padding-top:50px;
            padding-bottom:50px;
        }

        /* TITLE */

        .title{
            text-align:center;
            margin-bottom:40px;
        }

        .title h1{
            font-size:65px;
            margin-bottom:10px;
            text-shadow:0 0 20px rgba(255,255,255,0.5);
        }

        .title p{
            font-size:22px;
            opacity:0.9;
        }

        /* CART LIST */

        .cart-list{
            display:flex;
            flex-direction:column;
            gap:25px;
        }

        /* CART ITEM */

        .cart-item{

            background:rgba(255,255,255,0.15);

            backdrop-filter:blur(18px);

            border:1px solid rgba(255,255,255,0.2);

            border-radius:30px;

            padding:25px;

            display:flex;

            justify-content:space-between;

            align-items:center;

            transition:0.4s;

            box-shadow:0 10px 25px rgba(0,0,0,0.25);
        }

        .cart-item:hover{

            transform:translateY(-5px);

            box-shadow:0 15px 35px rgba(0,0,0,0.35);
        }

        /* LEFT */

        .item-left h2{
            font-size:32px;
            margin-bottom:12px;
        }

        .item-left p{
            font-size:20px;
            opacity:0.95;
        }

        .item-total{
            margin-top:10px;
            font-size:26px;
            color:#90ff90;
            font-weight:bold;
        }

        /* REMOVE BUTTON */

        .remove-btn{

            border:none;

            background:linear-gradient(45deg,#ff3b3b,#d90000);

            color:white;

            padding:14px 22px;

            border-radius:16px;

            cursor:pointer;

            font-size:17px;

            transition:0.3s;
        }

        .remove-btn:hover{

            transform:scale(1.05);
        }

        /* TOTAL BOX */

        .total-box{

            margin-top:40px;

            background:rgba(255,255,255,0.15);

            backdrop-filter:blur(18px);

            border-radius:30px;

            padding:30px;

            text-align:center;

            border:1px solid rgba(255,255,255,0.2);
        }

        .total-box h3{

            font-size:42px;
        }

        /* BUTTONS */

        .buttons{

            display:flex;

            justify-content:center;

            gap:20px;

            margin-top:30px;

            flex-wrap:wrap;
        }

        .checkout-btn{

            text-decoration:none;

            background:linear-gradient(45deg,#00a2ff,#005eff);

            color:white;

            padding:18px 35px;

            border-radius:18px;

            font-size:20px;

            transition:0.3s;
        }

        .checkout-btn:hover{

            transform:scale(1.05);

            box-shadow:0 10px 25px rgba(0,100,255,0.4);
        }

        .back-btn{

            text-decoration:none;

            background:rgba(255,255,255,0.15);

            backdrop-filter:blur(10px);

            color:white;

            padding:18px 35px;

            border-radius:18px;

            font-size:20px;

            border:1px solid rgba(255,255,255,0.2);

            transition:0.3s;
        }

        .back-btn:hover{

            transform:scale(1.05);
        }

        /* EMPTY */

        .empty-cart{

            background:rgba(255,255,255,0.15);

            backdrop-filter:blur(18px);

            border-radius:30px;

            padding:40px;

            text-align:center;

            font-size:28px;

            border:1px solid rgba(255,255,255,0.2);
        }

        /* MOBILE */

        @media(max-width:850px){

            .cart-item{

                flex-direction:column;

                align-items:flex-start;

                gap:20px;
            }

            .title h1{
                font-size:45px;
            }

            .item-left h2{
                font-size:26px;
            }

        }

    </style>

</head>

<body>

<div class="container">

    <!-- TITLE -->

    <div class="title">

        <h1>🛒 კალათა</h1>

        <p>თქვენი დამატებული პროდუქტები</p>

    </div>

    @php

        $cart = session()->get('cart', []);

        $total = 0;

    @endphp

    @if(count($cart) > 0)

        <div class="cart-list">

            @foreach($cart as $id => $item)

                @php

                    $itemTotal = $item['price'] * $item['quantity'];

                    $total += $itemTotal;

                @endphp

                <!-- ITEM -->

                <div class="cart-item">

                    <div class="item-left">

                        <h2>

                            {{ $item['name'] }}

                        </h2>

                        <p>

                            {{ $item['price'] }} ₾ × {{ $item['quantity'] }}

                        </p>

                        <div class="item-total">

                            {{ $itemTotal }} ₾

                        </div>

                    </div>

                    <!-- REMOVE -->

                    <form action="{{ route('cart.remove', $id) }}" method="POST">

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="remove-btn">

                            🗑 წაშლა

                        </button>

                    </form>

                </div>

            @endforeach

        </div>

        <!-- TOTAL -->

        <div class="total-box">

            <h3>

                💰 ჯამში: {{ $total }} ₾

            </h3>

            <div class="buttons">

                <a href="{{ route('checkout') }}" class="checkout-btn">

                    🚀 შეკვეთის გაკეთება

                </a>

                <a href="{{ route('shop') }}" class="back-btn">

                    ← მაღაზიაში დაბრუნება

                </a>

            </div>

        </div>

    @else

        <!-- EMPTY -->

        <div class="empty-cart">

            🛒 კალათა ცარიელია

            <div class="buttons">

                <a href="{{ route('shop') }}" class="checkout-btn">

                    მაღაზიაში დაბრუნება

                </a>

            </div>

        </div>

    @endif

</div>

</body>
</html>