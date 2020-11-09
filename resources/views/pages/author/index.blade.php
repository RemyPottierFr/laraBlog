@extends('layouts.app')

@section('content')
    <section class="py-5 flex flex-col">
        <div class="flex">
            <img src="{{ $author->picture }}" class="w-32 h-32 rounded-full shadow-lg"/>
            <div class="flex flex-col ml-6 justify-end resize">
                <h3 class="text-primary text-3xl">{{ $author->name }}</h3>
                <span class="text-light font-thin text-xl">{{ $author->job }}</span>
            </div>
        </div>

        <h4 class="text-secondary text-xl mt-8 font-semibold">List of their articles</h4>
        <div class="grid row-gap-4 mt-4">
            <div class="flex justify-between px-4 py-2 text-xl">
                <span class="text-secondary w-1/2">Title</span>
                <span class="tracking-wider font-semibold text-secondary hover:text-primary uppercase">Tags</span>
                <span class="text-light tracking-wider w-1/4">Date of last update</span>
            </div>
            @forelse($author->articles as $article)
                <div class="flex justify-between shadow rounded px-4 py-2">
                    <a href="{{ route('article', ['id'=>$article->id]) }}"
                       class="text-secondary hover:text-primary transition-all duration-500 ease-in-out w-1/2">{{ $article->title }}</a>
                    <span class="tracking-wider font-semibold text-secondary hover:text-primary uppercase">tags</span>
                    <span class="text-light tracking-wider w-1/4">{{ $article->updated_at->format('M t Y') }}</span>
                </div>
            @empty
                <p class="text-primary text-2xl text-center my-8">No articles for this author, were sorry.</p>
            @endforelse
        </div>
    </section>
@endsection
