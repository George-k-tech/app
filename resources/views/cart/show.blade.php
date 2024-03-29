@extends('checkoutLayout.index')

@section('content')
    <div class="order-detail">
        <div class="order-detail-left">
            @if (session('message'))
            <div>{{ session('message') }}</div>
        @endif
            <div class="order-customer-detail">
                <div class="customer-detail-head">
                    <h2>Customer Details</h2>
                    <p><a href="{{ url('customer-detail-index/' . $user_id) }}">Change <i class="las la-angle-right"></i></a>
                    </p>
                </div>
                <div class="order-hr">
                </div>

                <div class="order-customer-desc">

                    <p> <span>Name: </span>{{$info->name }}</p>
                    <p><span>Phone: </span> {{$info->phone }}</p>
                    <p><span>Region: </span> {{$info->region }}</p>
                    <p><span>Area: </span> {{$info->area }}</p>
                    <p><span>Additional Info: </span> {{$info->additionalInfo }}</p>

                </div>

            </div>

            <div class="order-delivery-detail">
                <h2>Delivery details</h2>
                <div class="order-hr">

                </div>
                <div class="order-delivery-container">
                    @if (session('cart'))
                        @php $total = 0 @endphp
                        @foreach (session('cart') as $id => $item)
                            @php $total += $item['price'] * $item['quantity'] @endphp

                            <div class="order-delivery-item">
                                <div class="order-item">
                                    <div class="order-item-image"> <img src="{{ $item['image'] }}"></div>
                                    <div class="order-quantity-desc">
                                        <p>{{ $item['description'] }}</p>
                                        <p>QTY:{{ $item['quantity'] }}</p>
                                    </div>
                                </div>
                                <div class="order-item-price">
                                    <p>Subtotal:{{ $item['price'] * $item['quantity'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>


            </div>

            <div class="order-modify">
                <p class="modify-btn"> <a href="{{ route('cart.index') }}"> Modify Cart</a> </p>
            </div>
        </div>

        <div class="order-detail-right">
            <h2>Order Summary</h2>
            <div class="order-hr">

            </div>
            <div class="order-detail-total">
                <p> Item's total(<span>{{ count((array) session('cart')) }}</span>)</p>
                <p>{{ $total }}</a></p>
            </div>

            <div class="order-item-fee">
                <p>Delivery fees </p>
                <p><span>200</span></p>
            </div>

            <div class="order-detail-sum">
                <p>Total</p>
                <p>{{ $total }}</a></p>
            </div>

            <div class="confirm-order-btn">
                <p><a href="{{ route('cart.store') }}">Confirm Order</a> </p>
            </div>
        </div>
    </div>

@endsection
