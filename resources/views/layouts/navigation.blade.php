<nav>
    <img src="" class="logo" alt="Logo" />
    <ul>
        <li><a href="{{route('shop.index')}}"> Shop</a></li>
        <li><a href="{{route('product.index')}}"> products</a></li>
        <li><a href="#"> to be known</a></li>
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
                        <a href="{{ route('logout') }}" class="sub-menu-link" onclick="event.preventDefault(); this.closest('form').submit();">
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

