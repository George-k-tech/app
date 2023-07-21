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
                            <a href="{{route('add-to-cart',$item->id)}}" class="cart-btn">Add To Cart</a>
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


</x-app-layout>
