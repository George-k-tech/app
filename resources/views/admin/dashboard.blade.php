@extends('admin.index')

@section('content')

<main class="admin-main">
    <div class="cards">
        <div class="card-single">
            <div>
                <p>{{count($users)}}</p>
                <span>Customers</span>
            </div>
            <div>
                <span class="las la-users"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <p>{{count($categories)}}</p>
                <span>Categories</span>
            </div>
            <div>
                <span class="las la-clipboard-list"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
               <p>{{count($products)}}</p>
                <span>Products</span>
            </div>
            <div>
                <span class="las la-clipboard-list"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <p>{{count($orders)}}</p>
                <span>Orders</span>
            </div>
            <div>
                <span class="las la-shopping-bag"></span>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h1>$124</h1>
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
                <button><a  href="{{route('order.index')}}"> <span class="las la-arrow-right"></span>see all</a></button>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table style="width:100%">
                        <thead>
                            <tr>
                                <td>Project Titles</td>
                                <td>Department</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>UI design</td>
                                <td>UI team</td>
                                <td><span class="status pink"></span> passed</td>
                            </tr>

                            <tr>
                                <td>UI design</td>
                                <td>UI team</td>
                                <td><span class="status purple"></span> review</td>
                            </tr>

                            <tr>
                                <td>UI design</td>
                                <td>UI team</td>
                                <td><span class="status orange"></span> pending</td>
                            </tr>
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

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>


                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                        <img src="" alt="customer" width="40px" height="40px">
                        <div>
                            <h4>George k kariuki</h4>
                            <small> CEO excerpt</small>
                        </div>
                    </div>
                    <div class="contact">
                        <span class="las la-user-circle"></span>
                        <span class="las la-comment"></span>
                        <span class="las la-phone"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection