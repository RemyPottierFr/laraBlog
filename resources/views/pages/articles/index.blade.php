@extends('layouts.app')

@section('content')
    <section class="grid grid-cols-1 md:grid-cols-2 col-gap-4 py-8">
        @foreach($articles as $article)
            <div
                class="flex flex-col px-4 py-6 rounded items-start hover:shadow-lg transition-all duration-500 ease-in-out">
                <a href="{{ route('article',["id"=>$article->id]) }}" class="w-full mr-2">
                    <img src="{{ $article->picture }}" class="w-full h-auto rounded"/>
                </a>
                <div class="flex flex-col w-full py-4">
                    <p class="text-light tracking-wider"><span
                            class="font-semibold text-secondary hover:text-primary uppercase">Product</span>
                        • {{ $article->created_at->format('M t Y') }}
                    </p>
                    <a href="{{ route('article',["id"=>$article->id]) }}"
                       class="text-2xl my-4 tracking-wide hover:text-primary transition-all duration-500 ease-in-out">{{ $article->title }}</a>
                    <p class="text-light tracking-wide text-sm">{{ $article->description }}</p>
                    <div class="flex mt-4">
                        <img src="{{ $article->author->picture }}" class="w-16 h-16 rounded-full shadow-lg"/>
                        <div class="flex flex-col ml-2 justify-end">
                            <a href="{{ route('author',["id"=>$article->author->id]) }}"
                               class="text-secondary hover:text-primary transition-all duration-500 ease-in-out">{{ $article->author->name }}</a>
                            <span class="text-light font-thin">{{ $article->author->job }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection
