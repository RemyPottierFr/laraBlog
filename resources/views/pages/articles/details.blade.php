@extends('layouts.app')

@section('content')
    <section class="flex flex-col mt-8">
        <div class="w-full">
            <img src="{{ $article->picture }}" class="w-full h-auto"/>
        </div>
        <div class="flex flex-col w-full px-2 mt-6">
            <div class="flex mt-2 mr-2">
                <img src="{{ $article->author->picture }}" class="w-16 h-16 rounded-full shadow-lg"/>
                <div class="flex flex-col ml-2 justify-end">
                    <a href="{{ route('author',["id"=>$article->author->id]) }}"
                       class="text-secondary hover:text-primary transition-all duration-500 ease-in-out">{{ $article->author->name }}</a>
                    <span class="text-light font-thin">{{ $article->author->job }}</span>
                </div>
            </div>
            <p class="text-light tracking-wider my-4">
                <span class="font-semibold text-secondary hover:text-primary uppercase">Product</span>
                • {{ $article->updated_at->format('M t Y') }}
            </p>
            <h2
                class="text-3xl mb-4 tracking-wide">{{ $article->title }}</h2>
            <p class="text-secondary text-lg tracking-wide leading-8 w-full md:w-11/12">
                {!! $article->content !!}
            </p>
        </div>
        <div class="mt-6">
            <a href="{{ route('article_list') }}"
               class="text-primary px-3 py-2 rounded hover:bg-secondary hover:bg-opacity-25 text-xl transition-all duration-500 ease-in-out">
                <i class="fas fa-angle-left mr-2"></i> Découvrir d'autres articles
            </a>
        </div>
    </section>
@endsection
