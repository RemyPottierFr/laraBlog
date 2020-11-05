@extends('layouts.app')

@section('content')
    <section class="flex flex-col">
        <div class="w-full">
            <img src="{{ asset('images/chicago_wallpaper.jpg') }}" class="w-full h-auto"/>
        </div>
        <div class="flex flex-col w-full px-2 mt-6">
            <div class="flex mt-2 mr-2">
                <img src="{{ asset('images/profile.jpg') }}" class="w-16 h-16 rounded-full shadow-lg"/>
                <div class="flex flex-col ml-2 justify-end">
                    <a href="#" class="text-secondary hover:text-primary transition-all duration-500 ease-in-out">Tom
                        Jédusor</a>
                    <span class="text-light font-thin">Product owner at Poudlar</span>
                </div>
            </div>
            <p class="text-light tracking-wider my-4">
                <span class="font-semibold text-secondary hover:text-primary uppercase">Product</span> • 23/10/2020
            </p>
            <a href="#"
               class="text-3xl mb-4 tracking-wide hover:text-primary transition-all duration-500 ease-in-out">This
                title is incredible, I promise this article is too !</a>
            <p class="text-secondary text-lg tracking-wide leading-8 w-full md:w-11/12">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla in ex mauris. Curabitur fermentum eu
                massa at faucibus. Quisque gravida dolor vitae augue bibendum scelerisque. Aenean posuere fermentum
                condimentum. Morbi urna velit, imperdiet nec vehicula sit amet, maximus cursus risus. Donec eu
                condimentum justo. Nunc convallis tellus vel libero hendrerit, at pretium felis tempor. Nam eu magna
                leo. Maecenas nec tristique arcu. Fusce vestibulum vitae turpis vitae cursus. Morbi sagittis faucibus
                aliquet. Vestibulum justo justo, placerat nec nunc vitae, consectetur facilisis mi. Mauris condimentum
                velit ac vestibulum pulvinar. Curabitur fringilla lectus felis, vitae scelerisque nunc vulputate sed.
                Pellentesque feugiat ipsum eu lacus efficitur malesuada. Proin id gravida metus, in consequat quam.

                Quisque nec nunc at turpis pellentesque sollicitudin. Cras porttitor eu tortor dignissim pellentesque.
                Vivamus convallis fringilla faucibus. Vestibulum et fermentum nisl. Proin at volutpat turpis, accumsan
                blandit ipsum. Aenean non ipsum porta, egestas ex nec, pretium dolor. Vivamus fermentum purus ac diam
                tempus, nec tincidunt nunc luctus. Nunc ac mollis quam. Donec a ipsum euismod, ultricies turpis ac,
                vestibulum tortor. Sed sit amet leo non arcu bibendum vestibulum. Mauris eu vulputate massa, at semper
                ligula. Fusce ipsum nibh, viverra vel purus et, blandit malesuada ipsum. Nullam a leo molestie, tempor
                massa a, dapibus risus. Mauris ante urna, porta vitae suscipit quis, congue vitae mauris.

                Fusce eget sapien tellus. Sed magna libero, tincidunt vel efficitur ut, aliquet eget risus. Donec
                fringilla sapien sit amet ipsum sollicitudin sagittis dictum quis mauris. Aliquam scelerisque congue
                sapien. Quisque quis lorem ultricies, ultricies erat at, condimentum metus. Vestibulum quis felis elit.
                Duis ullamcorper, metus dapibus bibendum accumsan, orci risus bibendum risus, ut imperdiet sapien ex vel
                lacus. Praesent porttitor suscipit ipsum non eleifend. Duis vitae justo laoreet mauris cursus lobortis.
                Nullam eget lacus sed dui placerat tempus. Aliquam erat volutpat. Nulla placerat nisi quis ex maximus
                congue. Duis egestas enim a elit placerat finibus.

                Aenean et lectus nisl. Pellentesque porttitor ante ut nisl faucibus placerat. Etiam fermentum nibh
                rhoncus rhoncus ultrices. Donec non pretium tortor. Mauris neque mi, suscipit et eros at, tristique
                ultrices nisl. Praesent molestie arcu nec malesuada ultrices. Aliquam tempor neque non lobortis
                interdum. Nam tristique nunc a eros bibendum lobortis. Sed mattis ultricies ligula non semper. Curabitur
                tincidunt at mi in facilisis. Nulla posuere nibh vulputate lacus tincidunt posuere. Donec ornare felis
                sodales venenatis viverra. Donec ut interdum enim. In sed arcu ac urna consequat placerat vitae in orci.
                Donec eget facilisis nisi. Proin vel venenatis risus.
            </p>
        </div>
        <div class="mt-6">
            <a href="{{ route('article_list') }}" class="text-primary px-3 py-2 rounded hover:bg-secondary hover:bg-opacity-25 text-xl transition-all duration-500 ease-in-out">
                <i class="fas fa-angle-left mr-2"></i> Aller à la liste d'articles
            </a>
        </div>
    </section>
@endsection
