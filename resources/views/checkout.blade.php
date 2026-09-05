<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
        }

        body {
            min-height: 100vh;
            color: white;

            background-image:
                linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35)),
                url('{{ asset('images/snl.jpg') }}');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;

            display: flex;
            justify-content: center;
            align-items: center;

            overflow-x: hidden;
        }

        /* CHECKOUT CARD */

        .checkout-card {
            width: 450px;
            max-width: 95%;

            background: rgba(255, 255, 255, 0.15);

            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);

            border: 1px solid rgba(255, 255, 255, 0.2);

            border-radius: 35px;

            padding: 35px;

            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.35);
        }

        /* TITLE */

        .checkout-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .checkout-title h1 {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .checkout-title p {
            font-size: 18px;
            opacity: 0.9;
        }

        /* ALERTS */

        .success {
            background: rgba(0, 255, 100, 0.15);
            color: #8fff8f;
            padding: 14px;
            border-radius: 14px;
            margin-bottom: 18px;
            border: 1px solid rgba(0, 255, 100, 0.3);
        }

        .error {
            background: rgba(255, 0, 0, 0.15);
            color: #ff9d9d;
            padding: 14px;
            border-radius: 14px;
            margin-bottom: 18px;
            border: 1px solid rgba(255, 0, 0, 0.3);
        }

        /* INPUTS */

        .input-box {
            margin-bottom: 18px;
        }

        .input-box input {
            width: 100%;

            padding: 17px;

            border: none;
            outline: none;

            border-radius: 16px;

            background: rgba(255, 255, 255, 0.18);

            color: white;

            font-size: 17px;

            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);

            border: 1px solid rgba(255, 255, 255, 0.15);
        }

        .input-box input::placeholder {
            color: #e5e5e5;
        }

        /* TOTAL */

        .total-box {
            margin-top: 10px;

            background: rgba(255, 255, 255, 0.12);

            padding: 20px;

            border-radius: 18px;

            text-align: center;

            font-size: 28px;

            font-weight: bold;

            margin-bottom: 22px;
        }

        /* BUTTON */

        .checkout-btn {
            width: 100%;

            padding: 18px;

            border: none;

            border-radius: 18px;

            background: linear-gradient(45deg, #00a2ff, #005eff);

            color: white;

            font-size: 18px;

            cursor: pointer;

            transition: 0.3s;
        }

        .checkout-btn:hover {
            transform: scale(1.03);

            box-shadow: 0 10px 25px rgba(0, 100, 255, 0.45);
        }

        /* BACK */

        .back-link {
            display: block;

            text-align: center;

            margin-top: 22px;

            color: white;

            text-decoration: none;

            font-size: 17px;

            opacity: 0.9;

            transition: 0.3s;
        }

        .back-link:hover {
            opacity: 1;
        }

        /* MOBILE */

        @media (max-width: 550px) {

            body {
                min-height: 100dvh;

                align-items: stretch;

                background-attachment: scroll;
            }

            .checkout-card {
                width: 100%;
                max-width: 100%;

                min-height: 100dvh;

                border-radius: 0;

                padding: 30px 20px;

                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .checkout-title h1 {
                font-size: 36px;
            }

            .checkout-title p {
                font-size: 16px;
            }

            .input-box input {
                padding: 16px;
                font-size: 16px;
            }

            .total-box {
                font-size: 24px;
            }

            .checkout-btn {
                padding: 17px;
            }
        }
    </style>

</head>

<body>

    <div class="checkout-card">

        <!-- TITLE -->

        <div class="checkout-title">

            <h1>🛒 შეკვეთა</h1>

            <p>შეავსე ინფორმაცია შეკვეთისთვის</p>

        </div>


        <!-- SUCCESS -->

        @if(session('success'))

            <div class="success">
                {{ session('success') }}
            </div>

        @endif


        <!-- ERROR -->

        @if(session('error'))

            <div class="error">
                {{ session('error') }}
            </div>

        @endif


        <!-- FORM -->

        <form action="{{ route('order.store') }}" method="POST">

            @csrf

            <div class="input-box">

                <input
                    type="text"
                    name="name"
                    placeholder="👤 სახელი"
                    required
                >

            </div>


            <div class="input-box">

                <input
                    type="text"
                    name="phone"
                    placeholder="📞 ტელეფონი"
                    required
                >

            </div>


            <div class="input-box">

                <input
                    type="text"
                    name="address"
                    placeholder="📍 მისამართი"
                    required
                >

            </div>


            <!-- TOTAL -->

            <div class="total-box">

                @php

                    $cart = session()->get('cart', []);

                    $total = 0;

                    foreach($cart as $item) {
                        $total += $item['price'] * $item['quantity'];
                    }

                @endphp

                💰 {{ $total }} ₾

            </div>


            <!-- BUTTON -->

            <button type="submit" class="checkout-btn">
                🚀 შეკვეთის გაგზავნა
            </button>

        </form>


        <!-- BACK -->

        <a href="{{ route('shop') }}" class="back-link">
            ← დაბრუნება მაღაზიაში
        </a>

    </div>

</body>
</html>