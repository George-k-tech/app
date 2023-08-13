@extends('checkoutLayout.index')

@section('content')

    <div class="customer-info-index">

        <div class="customer-info-body">
            <p class="customer-info-p">Your Address</p>

            <div class="customer-info-address">
                <a href="{{ route('customer.create') }}"><i class="las la-plus"></i> Add Address</a>
                <a href="{{ url('customer-detail-edit/' . $customer->id . '/edit') }}"><i class="las la-pen"></i> Edit</a>
            </div>
            <hr>
            <div class="customer-detail-detail">

                <p><span>Name:</span> {{ $customer->name }}</p>
                <p><span>Phone:</span> {{ $customer->phone }}</p>
                <p><span>Region:</span> {{ $customer->region }}</p>
                <p><span>Area:</span> {{ $customer->area }}</p>
                <p><span>Additional Info:</span> {{ $customer->additionalInfo }}</p>
            </div>
            <div class="customer-info-btn">
                <div class="customer-info-btn-a">
                    <p><a href="{{ route('cart.show') }}">Save</a></p>
                </div>
            </div>
        </div>


        @if (session('cart'))
            @php $total = 0 @endphp
            @foreach (session('cart') as $id => $item)
                @php $total += $item['price'] * $item['quantity'] @endphp
            @endforeach
        @endif


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
