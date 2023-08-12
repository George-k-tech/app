@extends('checkoutLayout.index')

@section('content')

<div>
    <p>Your Address</p>
    <a href="{{route('customer.create')}}"><i class="las la-plus"></i> Add Address</a>
    <div>
        @foreach ($customer as $item)
        <a href="{{url('customer-detail-edit/' .$item->id . '/edit')}}"><i class="las la-pen"></i> Edit</a>
        <p>{{$item->name}}</p>
        <p>{{$item->phone}}</p>
        <p>{{$item->region}}</p>
        <p>{{$item->Area}}</p>
        <p>{{$item->additionalInfo}}</p>
        @endforeach
    </div>

    <p><a href="{{route('cart.show')}}">Save</a></p>
</div>


@endsection