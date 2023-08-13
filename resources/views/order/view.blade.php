@extends('admin.index')
@section('content')

<div class="order-detail">

    <p>order</p>
    <p>{{$customer->customer_id}}</p>
    <p>{{$customer->name}}</p>
    <p>{{$customer->phone}}</p>
    <p>{{$customer->region}}</p>
    <p>{{$customer->area}}</p>
    <p>{{$customer->additionalInfo}}</p>
</div>


@endsection