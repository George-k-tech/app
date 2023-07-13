<x-app-layout>
    <section class="home" id="home">
        <div class="content">
            <h3>G-commerce offers</h3>
            <span> affordable products</span>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloremque quam iusto asperiores
                doloribus eius, maxime quos sed quidem beatae!</p>
            <a href="#" class="btn">Shop Now </a>
        </div>
    </section>
    {{--     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex justify-center">
            {{ __('G-commerce') }}
        </h2>
    </x-slot> --}}
    {{-- <div class="body">
        <div class="container">
            <div class="header">
                <h1>products</h1>
            </div>
            <div class="products">
                @foreach ($products as $item)
                    <div class="product">
                        <div class="image">
                            <img src={{ $item->image }} alt={{ $item->name }}>
                        </div>
                        <div class="namePrice">
                            <h3>{{ $item->name }}</h3>
                            <span>${{ $item->price }}</span>
                        </div>
                        <p>{{ $item->description }}</p>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="bay">
                            <button> buy now </button>
                        </div>
                    </div>
                @endforeach
            </div> --}}
    {{--    <div class="body">
        <div class="container">
            <div class="header">
                <h1>products</h1>
            </div>
            <div class="products">
                @foreach ($products as $item)
                    <div class="product">
                        <div class="image">
                            <img src={{ $item->image }} alt={{ $item->name }}>
                        </div>
                        <div class="namePrice">
                            <h3>{{ $item->name }}</h3>
                            <span>${{ $item->price }}</span>
                        </div>
                        <p>{{ $item->description }}</p>
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <div class="bay">
                            <button> buy now </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}

    {{-- <div class="">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8 ">
            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
              @foreach ($products as $item)
              <div class="group relative">
                    <div
                        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80 ">
                        <img src={{$item->image}}
                            alt={{$item->name}}
                            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="{{url('shop/'.$item->slug)}}">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    {{$item->name}}
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">{{$item->description}}</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">${{$item->price}}</p>
                    </div>
                </div>
                @endforeach    
                <!-- More products... -->
            </div>
        </div>
    </div> --}}

</x-app-layout>
