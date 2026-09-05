@extends('layouts.app')

@section('content')
<div style="max-width: 600px; margin: auto;">
    <h2>Create New Blog</h2>

    <!-- Validation Errors (თუ რამე პატარა შეცდომაა) -->
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Title:</label>
        <input type="text" name="title" style="width: 100%; margin-bottom: 10px;">

        <label>Content:</label>
        <textarea name="content" style="width: 100%; height: 120px; margin-bottom: 10px;"></textarea>

        <label>Image:</label>
        <input type="file" name="image" style="margin-bottom: 10px;">

        <label>Categories:</label>
        <select name="category_ids[]" multiple style="width: 100%; height: 150px; margin-bottom: 10px;">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <button type="submit" style="padding: 8px 16px;">Create Blog</button>
    </form>
</div>
@endsection
