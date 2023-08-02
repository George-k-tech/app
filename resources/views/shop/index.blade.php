<x-app-layout>


    <div class="new-container">
        <div class="carousel">
            <div class="slider">
                <section>
                    <div class="sliders slider1">
                        <div class="slider-info">
                           <div class="info-top">
                            <h1>Come shop with us</h1>
                            <p>hurry up and get the best offers now!</p>
                           </div>
                           <div class="buttonarea">
                            <div class="shop-btn">shop</div>
                           </div>
                        </div>
                        <div class="slider-showcase">
                            <div class="slider-image">
                                <img src="assets/shoes.jpg" alt="" class="slider-img">
                            </div>

                        </div>
                        
                    </div>
                </section>
                <section>
                    <div class="sliders slider2">
                        <div class="slider-info">
                            <div class="info-top">
                                <h1>Come shop with us</h1>
                                <p>hurry up and get the best offers now!</p>
                               </div>
                               <div class="buttonarea">
                                <div class="shop-btn">shop</div>
                               </div>
                        </div>
                        <div class="slider-showcase">
                            <div class="slider-image">
                                <img src="images/gaming_pc.png" alt="" class="slider-img">
                            </div>

                        </div>
                       
                    </div>
                </section>
                <section>
                    <div class="sliders slider2">
                        <div class="slider-info">
                            <div class="info-top">
                                <h1>Come shop with us</h1>
                                <p>hurry up and get the best offers now!</p>
                            </div>
                            <div class="buttonarea">
                                <div class="shop-btn">shop</div>
                               </div>
                        </div>
                        <div class="slider-showcase">
                            <div class="slider-image">
                                <img src="images/ASUS_router.png" alt=""  height="40px" class="slider-img">
                            </div>

                        </div>
                        
                    </div>
                </section>
                <section>
                    <div class="sliders slider2">
                        <div class="slider-info">
                            <div class="info-top">
                                <h1>Come shop with us</h1>
                                <p>hurry up and get the best offers now!</p>
                            </div>
                            <div class="buttonarea">
                                <div class="shop-btn">shop</div>
                               </div>
                        </div>
                        
                        <div class="slider-showcase">
                            <div class="slider-image">
                                <img src="images/acer monitor1.png" alt="" class="slider-img">
                            </div>

                        </div>
                        
                    </div>
                </section>
                <section>
                    <div class="sliders slider2">
                        <div class="slider-info">
                            <div class="slider-info">
                                <div class="info-top">
                                    <h1>Come shop with us</h1>
                                    <p>hurry up and get the best offers now!</p>
                                </div>
                                <div class="buttonarea">
                                    <div class="shop-btn">shop</div>
                                   </div>
                              
                            </div>
                        </div>
                        <div class="slider-showcase">
                            <div class="slider-image">
                                <img src="images/ASUS_laptop.png" alt="" class="slider-img">
                            </div>
                        </div>
                        
                    </div>
                </section>
                
            </div>
            <div class="controls">
                <span class="arrow prev"><i class="fa-solid fa-angle-left  fa-3x" style="opacity:0.5; color: white;"></i></span>
                <span class="arrow next"><i class="fa-solid fa-angle-right fa-3x" style="opacity:0.5; color: white;"></i></span>
            </div>
        </div>
    </div>

     <section class="products section" id="products" >
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
    
    <section class="about section" id="about">
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

    <section class="icons-container section">
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


    <section class="contact section" id="contact">
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

    <script>
        const slider = document.querySelector('.slider');
    const carousel = document.querySelector('.carousel')
    const prev =document.querySelector('.prev');
    const next =document.querySelector('.next');
    
    var direction;
    
    prev.addEventListener('click', function(){
        if(direction== -1){
            slider.appendChild(slider.firstElementChild);
            direction = 1;
        }
        slider.style.transform = 'translate(20%)';
        carousel.style.justifyContent ='flex-end';
        
       
    
    });
    next.addEventListener('click', function(){
        direction = -1;
        slider.style.transform = 'translate(-20%)';
        carousel.style.justifyContent ='flex-start'
    
    
    });
    
    slider.addEventListener('transitionend', function(){
        if (direction == -1){
            slider.appendChild(slider.firstElementChild);
    
        }else if(direction == 1){
            slider.prepend(slider.lastElementChild);
        }
        slider.style.transition ='none';
        slider.style.transform ='translate(0)';
        setTimeout(function(){
            slider.style.transition = 'all 0.5s';
    
        });
    
    
    });
     </script>  

</x-app-layout>
