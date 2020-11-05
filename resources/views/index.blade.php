@extends('layouts.app')

@section('content')
    <section class="flex flex-col py-12">
        <div class="flex justify-between flex-col md:flex-row items-start">
            <a href="#" class="w-full md:w-1/2 mr-2">
                <img src="{{ asset('images/chicago_wallpaper.jpg') }}" class="w-full h-auto rounded hover:shadow-lg transition-all duration-500 ease-in-out"/>
            </a>
            <div class="flex flex-col w-full md:w-1/2 px-2">
                <p class="text-light tracking-wider"><span
                        class="font-semibold text-secondary hover:text-primary uppercase">Product</span> • 23/10/2020
                </p>
                <a href="#"
                   class="text-3xl my-4 tracking-wide hover:text-primary transition-all duration-500 ease-in-out">This
                    title is incredible, I promise this article is too !</a>
                <p class="text-light tracking-wide text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum
                    convallis porttitor luctus. Nam sit amet nisi vitae erat venenatis blandit. Sed placerat, odio at
                    dapibus lacinia, enim mi viverra enim, at bibendum felis neque a neque. In pulvinar lacinia nisl sed
                    feugiat. Vivamus eget lacus lectus.</p>
                <div class="flex mt-2">
                    <img src="{{ asset('images/profile.jpg') }}" class="w-16 h-16 rounded-full shadow-lg"/>
                    <div class="flex flex-col ml-2 justify-end">
                        <a href="#" class="text-secondary hover:text-primary transition-all duration-500 ease-in-out">Tom Jédusor</a>
                        <span class="text-light font-thin">Product owner at Poudlar</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="grid grid-cols-1 md:grid-cols-2 col-gap-4 py-8">
        <div class="flex justify-between flex-col px-4 py-6 rounded items-start hover:shadow-lg transition-all duration-500 ease-in-out">
            <a href="#" class="w-full mr-2">
                <img src="{{ asset('images/chicago_wallpaper.jpg') }}" class="w-full h-auto rounded"/>
            </a>
            <div class="flex flex-col w-full py-4">
                <p class="text-light tracking-wider"><span
                        class="font-semibold text-secondary hover:text-primary uppercase">Product</span> • 23/10/2020
                </p>
                <a href="#"
                   class="text-2xl my-4 tracking-wide hover:text-primary transition-all duration-500 ease-in-out">This
                    title is incredible, I promise this article is too !</a>
                <p class="text-light tracking-wide text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum
                    convallis porttitor luctus. Nam sit amet nisi vitae erat venenatis blandit. Sed placerat, odio at
                    dapibus lacinia, enim mi viverra enim, at bibendum felis neque a neque. In pulvinar lacinia nisl sed
                    feugiat. Vivamus eget lacus lectus.</p>
                <div class="flex mt-4">
                    <img src="{{ asset('images/profile.jpg') }}" class="w-16 h-16 rounded-full shadow-lg"/>
                    <div class="flex flex-col ml-2 justify-end">
                        <a href="#" class="text-secondary hover:text-primary transition-all duration-500 ease-in-out">Tom Jédusor</a>
                        <span class="text-light font-thin">Product owner at Poudlar</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-between flex-col px-4 py-6 rounded items-start hover:shadow-lg transition-all duration-500 ease-in-out">
            <a href="#" class="w-full mr-2">
                <img src="{{ asset('images/chicago_wallpaper.jpg') }}" class="w-full h-auto rounded"/>
            </a>
            <div class="flex flex-col w-full py-4">
                <p class="text-light tracking-wider"><span
                        class="font-semibold text-secondary hover:text-primary uppercase">Product</span> • 23/10/2020
                </p>
                <a href="#"
                   class="text-2xl my-4 tracking-wide hover:text-primary transition-all duration-500 ease-in-out">This
                    title is incredible, I promise this article is too !</a>
                <p class="text-light tracking-wide text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vestibulum
                    convallis porttitor luctus. Nam sit amet nisi vitae erat venenatis blandit. Sed placerat, odio at
                    dapibus lacinia, enim mi viverra enim, at bibendum felis neque a neque. In pulvinar lacinia nisl sed
                    feugiat. Vivamus eget lacus lectus.</p>
                <div class="flex mt-4">
                    <img src="{{ asset('images/profile.jpg') }}" class="w-16 h-16 rounded-full shadow-lg"/>
                    <div class="flex flex-col ml-2 justify-end">
                        <a href="#" class="text-secondary hover:text-primary transition-all duration-500 ease-in-out">Tom Jédusor</a>
                        <span class="text-light font-thin">Product owner at Poudlar</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
