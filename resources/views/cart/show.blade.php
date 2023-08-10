<x-app-layout>

    <div class="order-detail">
        <div class="order-detail-left">
            <div class="order-customer-detail">
                <h2>customer details</h2>
                <div class="order-hr">
                </div>
                <div class="order-customer-desc">
                    <form>
                        <div class="order-customer-name">
                            <label>Name : </label>
                            <input type="text" placeholder="Input Customer Name" name="name"
                                value="{{ auth()->user()->name }}">
                        </div>
                        <div class="order-customer-phone">
                            <label>Phone :</label>
                            <input type="text" placeholder="Input Phone Number" name="phone">
                        </div>
                        <div class="order-customer-region">
                            <label>Region :</label>
                            <input type="text" placeholder="region(Nairobi,Kisumu ...)" name="region">
                        </div>
                        <div class="order-customer-area">
                            <label>Area:</label>
                            <input type="text" placeholder="Area(Kawangware,Utawala ...)" name="area">
                        </div>
                        <div class="order-customer-additionalInfo">
                            <label>Additional Info :</label>
                            <textarea placeholder="Write any additional information here..."></textarea>
                        </div>
                        <div class="order-customer-update">
                            <button class="order-customer-btn" type="submit">Update Details</button>
                        </div>
                    </form>
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
                <p class="modify-btn"> <a href="{{ route('cart.index') }}"> Modify </a> Cart</p>
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


</x-app-layout>
