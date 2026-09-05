<h1>{{ $blog->title }}</h1>
<p>{{ $blog->content }}</p>
@if($blog->image)
    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image">
@endif
<p>Categories:
    @foreach($blog->categories as $category)
        {{ $category->name }}
    @endforeach
</p>
<a href="{{ route('blogs.index') }}">Back to list</a>
