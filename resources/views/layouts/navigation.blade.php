    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="{{ route('shop.index') }}" class="logo">G-commerce<span>.</span></a>

        <nav class="navbar">
            <a href="{{ route('shop.index') }}">Shop</a>
            <a href="{{ route('product.index') }}">Products</a>
            <a href="#tobe known 2">To be known 2</a>
            @if (Route::has('login'))
                @auth
                    <a href="#" class="fas fa-user" onclick="toggleMenu()"></a>
                        <div class="sub-menu-wrap" id="subMenu">
                            <div class="sub-menu">
                                <div class="user-info">
                                    <h2>{{ Auth::user()->name }}</h2>
                                </div>
                                <hr>
                                <a href="{{ route('profile.edit') }}" class="sub-menu-link">
                                    <p>Edit Profile</p>
                                    <span></span>
                                </a>
                                <a href="#" class="sub-menu-link">
                                    <p>Orders</p>
                                    <span></span>
                                </a>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}" class="sub-menu-link"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        <p>Logout</p>
                                        <span></span>
                                    </a>
                                </form>
                            </div>
                        </div>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </nav>
        <div class="icons">
            <a href="{{route('cart.index')}}" class="fas fa-shopping-cart"><span>{{count((array)session('cart'))}}</span></a>
        </div>

        <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }
        </script>
    </header>



   