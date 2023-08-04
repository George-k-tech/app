<header class="admin">
    <h2>
        <label for="nav-toggle">
            <span class="las la-bars"></span>
        </label>
        Dashboard
    </h2>
    <div class="search-wrapper">
        <span class="las la-search"></span>
        <input type="search" placeholder="search here">
    </div>

    <div class="user-wrapper">

        @if (Route::has('login'))
                @auth
                    <a href="#" class="fas fa-user" onclick="toggleMenu()"></a>
                        <div class="sub-menu-wrap" id="subMenu">
                            <div class="sub-menu">
                                <div class="user-info">
                                    <h2>{{ Auth::user()->name }}</h2>
                                </div>
                                <hr>
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
    </div>
    <script>
        let subMenu = document.getElementById("subMenu");
        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>
</header>
