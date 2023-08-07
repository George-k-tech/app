<input type="checkbox" id="nav-toggle">

<div class="sidebar">
    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span> <span>Admin</span></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li><a href="{{ route('admin.dashboard') }}" ><span class="las la-igloo"></span>
                    <span> Dashboard</span></a>
            </li>
            <li><a href="{{ route('product.index') }}" ><span class="las la-clipboard-list"></span>
                    <span>Products</span></a>
            </li>
            <li><a href="{{ route('category.index') }}"><span class="las la-clipboard-list"></span>
                    <span>Category</span></a>
            </li>
            <li><a href="{{route('order.index')}}"><span class="las la-shopping-bag"></span>
                    <span>Order</span></a>
            </li>
            <li><a href=""><span class="las la-receipt"></span>
                    <span>Inventory</span></a>
            </li>
            <li><a href=""><span class="las la-user-circle"></span>
                    <span>Accounts</span></a>
            </li>
            <li><a href=""><span class="las la-clipboard-list"></span>
                    <span>Task</span></a>
            </li>

        </ul>
    </div>
</div>
