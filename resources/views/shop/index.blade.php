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

    <section class="about" id="about">
        <h1 class="heading"> <span> About</span> Us</h1>
        <div class="row">
            <div class="image-container">
                <img src="/assets/shoes.jpg" alt="about image">
                <h3>Best E-commerce application</h3>
            </div>
            <div class="content">
                <h3>why shop with us?</h3>
                <p>Lorem ipsum dolor
                    sit amet consectetur adipisicing elit.
                    Non, voluptatum.</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum aliquid quasi quis
                    molestiae neque eum ipsam dignissimos hic quo impedit!</p>
                <a href="#" class="btn">Learn More</a>
            </div>
        </div>
    </section>

    <section class="icons-container">
        <div class="icon">
            <img src="assets/motorbike.png" alt="shipping image">
            <div class="info">
                <h3>free delivery</h3>
                <span> on all orders</span>
            </div>
        </div>

        <div class="icon">
            <img src="assets/salary.png" alt="shipping image">
            <div class="info">
                <h3>10 days return policy</h3>
                <span>moneyback garantee</span>
            </div>
        </div>

        <div class="icon">
            <img src="assets/gift-card.png" alt="shipping image">
            <div class="info">
                <h3>offers $ gifts</h3>
                <span> on all orders</span>
            </div>
        </div>

        <div class="icon">
            <img src="assets/secure-payment.png" alt="shipping image">
            <div class="info">
                <h3>secure payment</h3>
                <span>protected by paypal</span>
            </div>
        </div>
    </section>


    <section class="products" id="products">
        <h1 class="heading"> Latest <span>Products</span></h1>
        <div class="box-container">

            @foreach ($products as $item)

                <div class="box">
                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src={{$item->image}} alt="this product">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="cart-btn">Add To Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>{{$item->name}}</h3>
                        <div class="price">
                            ${{$item->price}} <span>$the price was</span></div>
                    </div>
                </div>

            @endforeach
        </div>
    </section>

    <section class="contact" id="contact">
        <h1 class="heading"><span>contact</span>Us</h1>
        <div class="row">
            <form action="">
              <input type="text" placeholder="name" class="box">
              <input type="email" placeholder="email" class="box"> 
              <input type="number" placeholder="number" class="box">
              <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea> 
              <input type="submit" value="send message" class="btn">  
            </form>

            <div class="image">
                <img src="/assets/shoes.jpg" alt="contactus">
            </div>
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
