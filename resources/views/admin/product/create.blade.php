<!-- resources/views/admin/product/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Product Name" required><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <input type="number" name="price" placeholder="Price" required><br>
        <input type="number" name="stock" placeholder="Stock" required><br>
        <input type="file" name="image"><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
