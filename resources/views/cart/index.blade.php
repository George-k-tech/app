<x-app-layout>

    <table >
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    <tr rowId="{{ $id }}">
                        <td >
                            <div >
                                <div ><img src="{{ $details['image'] }}" /></div>
                                <div >
                                    <h4 >{{ $details['description'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td >${{ $details['price'] }}</td>
                        
                        <td ></td>
                        <td >
                            <a class="delete-product"><i> delete</i></a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td colspan="5" class="text-right">
                    <a href="{{ url('/') }}" class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                    <button class="btn btn-danger">Checkout</button>
                </td>
            </tr>
        </tfoot>
    </table>


 {{--    <section class="cart" id="cart">
        <h1 class="heading">Cart <span>Items</span></h1>
        <div class="cart-title">
            <h1>Product</h1>
            <h1>Description</h1>
            <h1>Quantity</h1>
            <h1>Price</h1>
            <h1>Subtotal</h1>
            <h1>Action</h1>
        </div>
        <hr>
        @php $total = 0 @endphp
        @if (session('cart'))
            @foreach (session('cart') as $id => $details)
                @php $total +=$details['price'] * $details['quantity'] @endphp
                <div class="cart-item">
                    <div class="product-image">
                        <img src="{{ $details['image'] }}" alt="the product image">
                    </div>
                    <div class="product-description">
                        <p>{{ $details['description'] }}</p>
                    </div>
                    <div class="product-quantity">
                        <input type="number" value="{{ $details['quantity'] }}" min="1">
                    </div>
                    <div class="product-price">
                        <p>{{ $details['price'] }}</p>
                    </div>
                    <div class="product-subtotal">
                        <p>subtotal: {{ $details['price'] * $details['quantity'] }}</p>
                    </div>
                    <div class="product-action">
                        <button class="btn delete-product">Delete</button>
                    </div>
                </div>
            @endforeach
        @endif
        <div class="total">
            <p>total {{ $total }}</p>
        </div>

        <div class="">
            <a href="{{ route('shop.index') }}">Continue Shopping</a>
        </div>

        <div class="">
            <a href="">checkout</a>
        </div>
    </section> --}}

    <script type="text/javascript">
        $(".delete-product").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to delete?")) {
                $.ajax({
                    url: '{{ route('delete.cart.product') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("rowId")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</x-app-layout>
