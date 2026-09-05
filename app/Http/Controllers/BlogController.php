<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // ----------------------------------
    // ყველა ბლოგის ნახვა
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    // ----------------------------------
    // ახალი ბლოგის დამატების ფორმა
    public function create()
    {
        $categories = Category::all(); // <-- ეს გაკლდა
        return view('blogs.create', compact('categories'));
    }

    // ----------------------------------
    // ბლოგის შექმნა ბაზაში
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'        => 'required',
            'content'      => 'required',
            'image'        => 'nullable|image',
            'category_ids' => 'required|array'
        ]);

      if ($request->hasFile('image')) {
    // 'public' disk-ით შენახვა(storage/app/public/blogs)
    $path = $request->file('image')->store('blogs', 'public');
} else {
    $path = null;
}

        // შევქმნათ ბლოგი
        $blog = Blog::create([
            'title'   => $validated['title'],
            'content' => $validated['content'],
            'image'   => $path ? str_replace('public/', '', $path) : null, // გზა დასაკავშირებლად
        ]);

        // many-to-many კატეგორიების მიბმა
        $blog->categories()->sync($validated['category_ids']);

        return back();
    }

    // ----------------------------------
    // ერთი ბლოგის ნახვა
    public function show(Blog $blog)
    {
        return view('blogs.show', compact('blog'));
    }

    // ----------------------------------
    // ბლოგის რედაქტირების ფორმა
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('blogs.edit', compact('blog', 'categories'));
    }

    // ----------------------------------
    // ბლოგის განახლება
    public function update(Request $request, Blog $blog)
    {
        $validated = $request->validate([
            'title'        => 'required',
            'content'      => 'required',
            'image'        => 'nullable|image',
            'category_ids' => 'required|array'
        ]);

        if ($request->hasFile('image')) {
            $blog->image = $request->file('image')->store('blogs');
        }
        $blog->title = $validated['title'];
        $blog->content = $validated['content'];
        $blog->save();

        // კატეგორიების განახლება
        $blog->categories()->sync($validated['category_ids']);

        return back();
    }

    // ----------------------------------
    // ბლოგის წაშლა
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back();
    }

    // ----------------------------------
    // აუზის გვერდის სიახლეები (ეს ჩასვი აქ!)
    public function pool()
    {
        $blogs = Blog::whereHas('categories', function ($q) {
            $q->where('name', 'აუზი');
        })->get();

        return view('pool', compact('blogs'));
    }

public function news()
{
    $blogs = Blog::whereHas('categories', function ($q) {
        $q->where('name', 'აუზი');
    })->paginate(6);

    return view('news', compact('blogs'));
}

public function services()
{
    $blogs = Blog::whereHas('categories', function ($q) {
        $q->where('name', 'სერვისები');
    })->get();

    return view('services', compact('blogs'));
}

}
