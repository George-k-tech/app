@extends('checkoutLayout.index')

@section('content')

<div>
    <p>Your Address</p>
    <a href="{{route('customer.create')}}"><i class="las la-plus"></i> Add Address</a>
    <div>
        <a href="{{url('customer-detail-edit/' .$customer->id . '/edit')}}"><i class="las la-pen"></i> Edit</a>
        <p>{{$customer->name}}</p>
        <p>{{$customer->phone}}</p>
        <p>{{$customer->region}}</p>
        <p>{{$customer->Area}}</p>
        <p>{{$customer->additionalInfo}}</p>
    </div>

    <p><a href="{{route('cart.show')}}">Save</a></p>
</div>


@endsection