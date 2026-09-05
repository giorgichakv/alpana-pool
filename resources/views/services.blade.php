<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ბლოგები — აუზი</title>

    <style>
        .container {
            width: 90%;
            margin: auto;
        }

        /* 👉 ეს არის მთავარი დამატება */
        .blogs-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
        }

        .blog-card {
            border: 1px solid #ccc;
            padding: 15px;
        }

        .blog-card img {
            width: 100%;
            height: auto;
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<section id="blogs" class="blogs-section">
    <div class="container">
        <h1>სიახლეები "ALPANA"</h1>

        @if($blogs->isEmpty())
            <p style="text-align:center; font-size:1.2rem; color:#555;">
                სიახლეები არ არის.
            </p>
        @else

            <!-- 👇 მხოლოდ ეს wrapper დავამატეთ -->
            <div class="blogs-wrapper">

                @foreach ($blogs as $blog)
                    <div class="blog-card">
                        <h2>{{ $blog->title }}</h2>

                        <!-- ტექსტი 그대로, არანაირი ლიმიტი -->
                        <p>{{ $blog->content }}</p>

                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" 
                                 alt="{{ $blog->title }}">
                        @endif

                        <p class="categories">
                            კატეგორიები: 
                            @foreach($blog->categories as $cat)
                                {{ $cat->name }}@if(!$loop->last), @endif
                            @endforeach
                        </p>
                    </div>
                @endforeach

            </div>

        @endif

    </div>
</section>

</body>
</html>