<a href="{{ route('blogs.create') }}">Create New Blog</a>

@foreach($blogs as $blog)
    <h2>{{ $blog->title }}</h2>
    <p>{{ $blog->content }}</p>
    <p>Categories: 
        @foreach($blog->categories as $category)
            {{ $category->name }}
        @endforeach
    </p>

    <a href="{{ route('blogs.edit', $blog->id) }}">Edit</a>

    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
