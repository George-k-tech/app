<x-app-layout>

    
        <div class="table-parent">
            @php $total = 0 @endphp
            @if (session('cart'))
                <div class="table">
                    <div class="table-header">
                        <div class="header-left">
                            <p> Products</p>
                        </div>
    
                        <div class="header-right">
                            <p>Price</p>
                            <p>Quantity</p>
                            <p>Subtotal</p>
                            <div class="delete"></div>
                        </div>
                    </div>
                    @foreach (session('cart') as $id => $details)
                        @php $total +=$details['price'] * $details['quantity'] @endphp
    
                        <div class="hr hr1"></div>
                        <div class="table-body" id="{{ $id }}">
    
                            <div class="content-left">
                                <div class="cart-image"><img src="{{ $details['image'] }}" width="100px" height="100px" />
                                </div>
                                <div class="cart-description">
                                    <p>{{ $details['description'] }}</p>
                                </div>
                            </div>
    
                            <div class="content-right">
                                <p>${{ $details['price'] }}</p>
                                <input class="cart-input quantity product_update" type="number" value="{{ $details['quantity'] }}">
                                <p>{{ $details['price'] * $details['quantity'] }}</p>
                                <p class="delete-product fa fa-trash"></p>
                            </div>
                        </div>
                    @endforeach
            @endif
        </div>
    
        <div class="checkout">
            <div class="checkout-title">
                <p>Cart Summary</p>
            </div>
            <div class="hr"></div>
            <div class="total">
                <P>Total</P>
                <p>{{ $total }}</p>
            </div>
            <div class="hr"></div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos, voluptatibus!</p>
            <div class="hr"></div>
            <div class="checkout-btn">
                <p class="check-btn"><a href="{{route('cart.store')}}">checkout <span>({{ $total }})</span></a></p>
                <p class="check-btn"><a href="{{ route('shop.index') }}"> Continue Shopping</a></p>
            </div>
        </div>
    
        </div>
    

    <script type="text/javascript">
$(".product_update").change(function(e){
    e.preventDefault();

    var ele =$(this);

    $.ajax({
        url:'{{route('update.cart')}}',
        method:"patch",
        data:{
            _token: '{{csrf_token ()}}',
            id: ele.parents(".table-body").attr("id"),
            quantity: ele.parents(".table-body").find(".quantity").val()
        },
        success:function(response){
            window.location.reload();
        }
    });
});



        $(".delete-product").click(function(e) {
            e.preventDefault();

            var ele = $(this);

            if (confirm("Do you really want to delete?")) {
                $.ajax({
                    url: '{{ route('delete.cart.product') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents(".table-body").attr("id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
    </script>
</x-app-layout>
