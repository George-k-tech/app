@extends('checkoutLayout.index')

@section('content')

<div>
    <p>Edit address</p>
    <form action="{{url('customer-detail-update/' .$customer->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="order-customer-name">
            <label>Name : </label>
            <input type="text" placeholder="Input Customer Name" name="name"
                value="{{$customer->name}}">
        </div>
        <div class="order-customer-phone">
            <label>Phone :</label>
            <input type="text" placeholder="Input Phone Number" name="phone" value="{{$customer->phone}}">
        </div>
        <div class="order-customer-region">
            <label>Region :</label>
            <input type="text" placeholder="region(Nairobi,Kisumu ...)" name="region" value="{{$customer->region}}">
        </div>
        <div class="order-customer-area">
            <label>Area :</label>
            <input type="text" placeholder="Area(Kawangware,Utawala ...)" name="area" value="{{$customer->area}}">
        </div>
        <div class="order-customer-additionalInfo">
            <label>Additional Info :</label>
            <textarea placeholder="Write any additional information here..." name="additionalInfo" >{{$customer->additionalInfo}}</textarea>
        </div>
        <div class="order-customer-update">
            <button class="order-customer-btn" type="submit">Update</button>
        </div>
       
    </form>
</div>


@endsection