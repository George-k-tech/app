<x-app-layout>

    <section class="products section" id="products">
        <h1 class="heading"><span>{{ $product->name }}</span></h1>

        <div class="box-container">
            <div class="box">
                <span class="discount">-10%</span>
                <div class="image">
                    <img src={{ $product->image }} alt="this product">
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="{{ route('add-to-cart', $product->id) }}" class="cart-btn">Add To Cart</a>
                        <a href="#"> More Details</a>
                    </div>
                </div>
                <div class="content">
                    <h3>{{ $product->name }}</h3>
                    <div class="price">
                        ${{ $product->price }} <span>$the price was</span></div>
                </div>
            </div>

        </div>

        <div class="product-detail">

            <p class="product-detail-head">Product Details</p>

            <div class="product-detail-body">
                <div class="key-features">
                    <p class="product-detail-key-features">Key Features</p>
                   <div class="detail-hr"></div>
                    <div>
                        <ul>
                            <li>one</li>
                            <li>one</li>
                            <li>one</li>
                        </ul>
                    </div>
                </div>

                <div class="in-the-box">
                    <p class="product-detail-key-features">What's In the box</p>
                    <div class="detail-hr"></div>
                    <div>
                        <p>desc of whats in the box</p>
                    </div>
                </div>

                <div class="specifications">
                    <p class="product-detail-key-features">Specifications</p>
                    <div class="detail-hr"></div>
                    <div>
                        <p>model</p>
                        <p>weight</p>
                        <p>care label</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <section class="products section" id="products">
        <h1 class="heading"><span>Similar Products</span></h1>
        <div class="box-container">
            @foreach ($relatedp as $item)
                <div class="box">
                    <span class="discount">-10%</span>
                    <div class="image">
                       
                        <a href="{{ url('/shop/' . $category->slug . '/' . $product->slug) }}"><img src={{ $item->image }}
                                alt="this product"></a>
                               
                    </div>
                    <div class="content">
                        <h3>{{ $item->name }}</h3>
                        <div class="price"> ${{ $item->price }} <span>$the price was</span></div>
                        <p class="content-desc">{{ $item->description }}</p> 
                    </div>
                    <div class="icons">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="{{ route('add-to-cart', $product->id) }}" class="cart-btn">Add To Cart</a>
                        <a href="#" class="fas fa-share"></a>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

</x-app-layout>
