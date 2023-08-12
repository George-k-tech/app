@extends('checkoutLayout.index')

@section('content')

<div>
    <p>Your Address</p>
    <a href="{{route('customer.create')}}"><i class="las la-plus"></i> Add Address</a>

    <div>
        @foreach ($info as $item)

        <p>{{$item->phone}}</p>
            
        @endforeach
    </div>
</div>


@endsection