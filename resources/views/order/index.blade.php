@extends('admin.index')
@section('content')
    <div class="admin-order">

        <div class="admin-order-title">
            <p>Orders</p>
        </div>

        <div class="admin-order-body">

            <div class="admin-order-body-header">

                <div>
                    <p>#</p>
                </div>

                <div>
                    <p>User Id</p>
                </div>

                <div>
                    <p>Image</p>
                </div>

                <div>
                    <p>price</p>
                </div>

                <div>
                    <p>Quantity</p>
                </div>

                <div>
                    <p>Action</p>
                </div>

            </div>

            @foreach ($orders as $key => $item)
            <div class="admin-order-body-body">

                    <div>
                        <p>{{ ++$key }}</p>
                    </div>
                
                    <div>
                        <p> {{ $item->user_id }}</p>
                    </div>

                    <div>
                        <img src="{{$item->image}}" width="150px">
                    </div>

                    <div>
                        <p>{{$item->price}}</p>
                    </div>

                    <div>
                        <p>{{$item->quantity}}</p>
                    </div>

                    <div>
                        <p><a href="{{url('order/' .$item->user_id)}}">View Details</a></p>
                    </div>

            </div>
            @endforeach

        </div>
    </div>
@endsection
