@extends('layouts.dashboard')

@section('content')
    <section class="py-5 flex flex-col md:px-8 py-8">
        <div class="flex">
            <img src="{{ $user->picture }}" class="w-32 h-32 rounded-full shadow-lg"/>
            <div class="flex flex-col ml-6 justify-end resize">
                <h3 class="text-primary text-3xl">{{ $user->name }}</h3>
                <span class="text-light font-thin text-xl">{{ $user->job }}</span>
            </div>
        </div>

        <h4 class="text-secondary text-xl mt-8 font-semibold">List of your articles</h4>
        <div class="grid row-gap-4 mt-4">
            @if($user->articles->count())
                <div class="flex justify-between px-4 py-2 text-xl">
                    <span class="text-secondary w-1/2">Title</span>
                    <span
                        class="tracking-wider font-semibold text-secondary hover:text-primary uppercase">Tags</span>
                    <span class="text-light tracking-wider text-center w-1/4">Date</span>
                    <span class="text-light tracking-wider w-1/6">Actions</span>
                </div>
                @foreach($user->articles as $article)
                    <form method="POST" action="{{ route('article_delete') }}"
                          class="flex justify-between shadow rounded px-4 py-2">
                        {{ csrf_field() }}
                        <a href="{{ route('article', ['id'=>$article->id]) }}"
                           class="text-secondary hover:text-primary transition-all duration-500 ease-in-out w-1/2">{{ $article->title }}</a>
                        <span
                            class="tracking-wider font-semibold text-secondary hover:text-primary uppercase">tags</span>
                        <span
                            class="text-light tracking-wider text-center w-1/4">{{ $article->updated_at->format('M t Y') }}</span>
                        <input class="hidden" name="id" value="{{ $article->id }}"/>
                        <div class="w-1/6 flex justify-center">
                            <button class="text-default bg-primary rounded shadow px-2 focus:outline-none"
                                    type="submit"><i class="fas fa-trash"></i></button>
                        </div>
                    </form>
                @endforeach
            @else
                <div class="my-8 flex flex-col justify-center">
                    <p class="text-primary text-2xl text-center ">You don't have created any article!</p>
                    <button class="focus:outline-none">
                        <a href="{{ route('add_article') }}"
                           class="text-default bg-primary rounded px-4 py-1 text-xl hover:bg-default hover:shadow hover:text-primary transition-all duration-300 ease-in-out">
                            Create one
                        </a>
                    </button>
                </div>
            @endif
        </div>
    </section>
@endsection
