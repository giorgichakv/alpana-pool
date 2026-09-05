<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>პროდუქტების სია</h1>

@if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif

@foreach($products as $product)
    <div style="margin-bottom:20px; border:1px solid #ccc; padding:10px; width:300px;">
        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" width="200">
        @endif

        <h3>{{ $product->name }}</h3>
        <p>ფასი: {{ $product->price }}₾</p>
        <p>რაოდენობა: {{ $product->stock }}</p>

        <form action="{{ route('cart.add') }}" method="POST">

        <form action="{{ route('product.destroy', $product->id) }}" method="POST"
              onsubmit="return confirm('დარწმუნებული ხარ, რომ გინდა წაშლა?');">
            @csrf
            @method('DELETE')
            <button type="submit">წაშლა</button>
        </form>
    </div>
@endforeach

<a href="{{ route('product.create') }}">ახალი პროდუქტის დამატება</a>

</body>
</html>