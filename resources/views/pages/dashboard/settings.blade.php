@extends("layouts.dashboard")


@section("content")
    <div class="grid grid-cols-1 md:grid-cols-2 col-gap-8 px-4">
        <form method="POST" class="flex flex-col justify-center items-center my-12 shadow-md rounded py-8">
            {{ csrf_field() }}
            <label class="flex flex-col text-xl">
                <span class="font-semibold text-secondary">Name <span
                        class="text-sm text-light">(first and lastname)</span> :</span>
                <input required name="name" type="text" value="{{ $user->name }}"
                       class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
            </label>
            @if ($errors->has('name'))
                <span>{{ $errors->first('name') }}</span>
            @endif
            <label class="flex flex-col text-xl">
                <span class="font-semibold text-secondary">Job :</span>
                <input required name="job" type="text" value="{{ $user->job }}"
                       class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
            </label>
            @if ($errors->has('job'))
                <span>{{ $errors->first('job') }}</span>
            @endif
            <label class="flex flex-col text-xl">
                <span class="font-semibold text-secondary">Email :</span>
                <input required name="email" type="email" value="{{ $user->email }}"
                       class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
            </label>
            @if ($errors->has('email'))
                <span>{{ $errors->first('email') }}</span>
            @endif

            <label class="flex flex-col text-xl mt-4">
                <span class="font-semibold text-secondary">Password :</span>
                <input required name="password" type="password"
                       class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
            </label>
            @if ($errors->has('password'))
                <span>{{ $errors->first('password') }}</span>
            @endif
            <label class="flex flex-col text-xl mt-4">
                <span class="font-semibold text-secondary">Confirm password :</span>
                <input required name="password_confirmation" type="password"
                       class="focus:outline-none px-2 text-secondary border-b-2 border-primary"/>
            </label>
            @if ($errors->has('password_confirmation'))
                <span>{{ $errors->first('password_confirmation') }}</span>
            @endif
            <button type="submit"
                    class="mt-4 rounded bg-primary text-default uppercase px-4 py-2 tracking-widest hover:shadow hover:bg-default hover:text-primary transition-all duration-300 ease-out">
                Register
            </button>
        </form>
        <div class="flex flex-col my-12">
            <h2 class="text-primary text-xl uppercase font-semibold">Management of your articles</h2>
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
        </div>
    </div>
@endsection
