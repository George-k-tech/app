<x-app-layout>
  
    <section class="products section" id="products">
        <h1 class="heading"><span>{{$category->name}}</span></h1>
        <div class="box-container">
            @foreach ($category->products as $product)
                <div class="box">
                    <span class="discount">-10%</span>
                    <div class="image">
                        <img src={{ $product->image }} alt="this product">
                        <div class="icons">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="{{ route('add-to-cart', $product->id) }}" class="cart-btn">Add To Cart</a>
                            <a href="#" class="fas fa-share"></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>{{ $product->name }}</h3>
                        <div class="price">
                            ${{ $product->price }} <span>$the price was</span></div>
                    </div>
                </div>
            @endforeach
        
        </div>
    </section>

</x-app-layout>
