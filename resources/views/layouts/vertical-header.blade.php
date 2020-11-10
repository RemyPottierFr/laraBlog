<section class="relative w-20 h-screen">
    <div
        class="flex flex-col justify-between bg-default shadow-md h-full">
        <div class="py-2 flex flex-col text-center text-2xl font-bold">
            <a href="{{ route('app_index') }}" class="mb-4">
                <img src="{{ asset('images/larablog_icon.png') }}" class="w-12 h-auto mx-auto"/>
            </a>
            <a href="{{ route('dashboard') }}"
               class="text-primary py-4 hover:bg-secondary hover:bg-opacity-25 transition-all ease-in-out duration-300"><i
                    class="fas fa-home"></i></a>
            <a href="{{ route('add_article') }}"
               class="text-primary py-4 hover:bg-secondary hover:bg-opacity-25 transition-all ease-in-out duration-300"><i
                    class="fas fa-plus"></i></a>
            <a href="{{ route('user_settings') }}"
               class="text-primary py-4 hover:bg-secondary hover:bg-opacity-25 transition-all ease-in-out duration-300"><i
                    class="fas fa-cog"></i></a>
        </div>
        <div class="border-t border-primary py-2 px-6 flex flex-col justify-around mt-4">
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
