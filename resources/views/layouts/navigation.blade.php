    <header>

        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>

        <a href="{{ route('shop.index') }}" class="logo">G-commerce<span>.</span></a>

        <nav class="navbar">
            <a href="{{ route('shop.index') }}">Shop</a>
            <a href="{{ route('product.index') }}">Products</a>
            <a href="#tobe known">To be Known</a>
            <a href="#tobe known 2">To be known 2</a>
            @if (Route::has('login'))
                @auth
                    <a href="#" class="fas fa-user" onclick="toggleMenu()">
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
                    </a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif
        </nav>
        <div class="icons">
            <a href="#" class="fas fa-shopping-cart"><span>1</span></a>
        </div>

        <script>
            let subMenu = document.getElementById("subMenu");
            function toggleMenu() {
                subMenu.classList.toggle("open-menu");
            }
        </script>
    </header>



    {{-- <nav>
    <img src="" class="logo" alt="Logo" />
    <ul>
        <li><a href="{{ route('shop.index') }}"> Shop</a></li>
        <li><a href="{{ route('product.index') }}"> products</a></li>
        <li><a href="{{ route('cart.index') }}">Cart<span class="cart-count">3</span></a></li>
    </ul>
    @if (Route::has('login'))
        @auth
            <img src="" class="user-pic" alt="user-Profile" onclick="toggleMenu()" />
            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <div class="user-info">
                        <img src="" alt="user" />
                        <h2>{{ Auth::user()->name }}</h2>
                    </div>
                    <hr>

                    <a href="{{ route('profile.edit') }}" class="sub-menu-link">
                        <img src="images" alt="user-profile" />
                        <p>Edit Profile</p>
                        <span></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <img src="images" alt="orders" />
                        <p>Orders</p>
                        <span></span>
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" class="sub-menu-link"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            <img src="images" alt="logout" />
                            <p>Logout</p>
                            <span></span>
                        </a>
                    </form>
                </div>
            </div>
        @else
            <ul>
                <li><a href="{{ route('login') }}">Login</a></li>
                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">Register</a></li>
                @endif
            </ul>
        @endauth
    @endif
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

</nav>
 --}}
