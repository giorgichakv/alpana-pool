<form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label>Title:</label>
    <input type="text" name="title" value="{{ $blog->title }}">

    <label>Content:</label>
    <textarea name="content">{{ $blog->content }}</textarea>

    <label>Image:</label>
    <input type="file" name="image">

    <label>Categories:</label>
    <select name="category_ids[]" multiple>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" 
                {{ $blog->categories->contains($category->id) ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit">Update Blog</button>
</form>
