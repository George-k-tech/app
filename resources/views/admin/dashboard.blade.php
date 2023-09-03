@extends('admin.index')

@section('content')
    <main class="admin-main">
        <div class="cards">
            <div class="card-single">
                <div>
                    <p>{{ count($users) }}</p>
                    <span>Customers</span>
                </div>
                <div>
                    <span class="las la-users"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <p>{{ count($categories) }}</p>
                    <span>Categories</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <p>{{ count($products) }}</p>
                    <span>Products</span>
                </div>
                <div>
                    <span class="las la-clipboard-list"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <p>{{ count($orders) }}</p>
                    <span>Orders</span>
                </div>
                <div>
                    <span class="las la-shopping-bag"></span>
                </div>
            </div>

            <div class="card-single">
                <div>
                    <p>$124</p>
                    <span>Income</span>
                </div>
                <div>
                    <span class="lab la-google-wallet"></span>
                </div>
            </div>

        </div>
    </main>


    <div class="recent-grid">
        <div class="projects">

            <div class="card">

                <div class="card-header">
                    <h3>Recent Orders</h3>
                    <button><a href="{{ route('order.index') }}"> <span class="las la-arrow-right"></span>see
                            all</a></button>
                </div>

                <div class="card-body">

                    <div class="table-responsive">
                        <table style="width:100%">
                            <thead>
                                <tr>
                                    <td>User_Id</td>
                                    <td>Price</td>
                                    <td>Quantity</td>
                                    <td>Status</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $item)
                                    <tr>
                                        <td>{{ $item->user_id }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td><span class="status orange"></span> pending</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

        <div class="customers">

            <div class="card">
                <div class="card-header">
                    <h3>Customers</h3>
                    <button>see all<span class="las la-arrow-right"></span></button>
                </div>

                <div class="card-body">
                    @foreach ($users as $item)
                        <div class="customer">
                            <div class="info">
                                <i class="las la-user "></i>
                                <div>
                                    <h4>{{ $item->name }}</h4>
                                    <small>{{ $item->email }}</small>
                                </div>
                            </div>
                            <div class="contact">
                                <span class="las la-user-circle"></span>
                                <span class="las la-comment"></span>
                                <span class="las la-phone"></span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
