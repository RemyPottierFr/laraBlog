<section class="fixed top-0 left-0 z-50 w-full">
    <div class="flex justify-around items-center px-12 py-6 shadow-md bg-default bg-opacity-75 h-20">
        <a href="{{ route('app_index') }}">
            <img src="{{ asset('images/larablog_logo.png') }}" class="w-48 h-auto"/>
        </a>
        <button
            class="absolute right-12 top-1/2 transform -translate-y-1/2 w-8 h-6 md:w-10 md:h-8 flex flex-col justify-between rounded-full focus:outline-none"
            id="header-button">
            <span class="w-full h-1 bg-primary"></span>
            <span class="w-full h-1 bg-primary"></span>
            <span class="w-full h-1 bg-primary"></span>
        </button>
    </div>
    <div id="header-menu"
         class="flex flex-col justify-between bg-default transition-all ease-in-out duration-700 -right-full absolute top-full header-menu shadow-md">
        <div class="py-2 px-6 flex flex-col text-right text-2xl font-bold">
            <a href="{{ route('article_list') }}"
               class="text-primary px-4 py-4 hover:bg-secondary hover:bg-opacity-25 rounded transition-all ease-in-out duration-300">Liste
                des articles</a>
            <a href="{{ route('article', ["id" => 1]) }}"
               class="text-primary px-4 py-4 hover:bg-secondary hover:bg-opacity-25 rounded transition-all ease-in-out duration-300">Un
                article</a>
            <a href="{{ route('author', ["id" => 1]) }}"
               class="text-primary px-4 py-4 hover:bg-secondary hover:bg-opacity-25 rounded transition-all ease-in-out duration-300">Un
                auteur</a>
            <a href=""
               class="text-primary px-4 py-4 hover:bg-secondary hover:bg-opacity-25 rounded transition-all ease-in-out duration-300">Connexion</a>
        </div>
        <div class="border-t border-primary py-2 px-6 flex justify-around">
            <a target="_blank" rel="noopener noreferrer" href="https://github.com/RemyPottierFr"
               class="text-secondary hover:text-primary transition-colors ease-in-out duration-300 text-4xl">
                <i class="fab fa-github-square"></i>
            </a>
            <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/remypottierfr/"
               class="text-secondary hover:text-primary transition-colors ease-in-out duration-300 text-4xl">
                <i class="fab fa-linkedin"></i>
            </a>
            <a target="_blank" rel="noopener noreferrer" href="https://twitter.com/RemyPottier37"
               class="text-secondary hover:text-primary transition-colors ease-in-out duration-300 text-4xl">
                <i class="fab fa-twitter-square"></i>
            </a>
        </div>
    </div>
</section>
