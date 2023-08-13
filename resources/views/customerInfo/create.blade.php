@extends('checkoutLayout.index')

@section('content')
    <div class="info-create">
        <div class="info-create-body">
            <p >Create Address</p>
            <form action="{{ route('customer.store') }}" method="POST">
                @csrf
                <div class=" label">
                    <label>Name :</label>
                    <input type="text" placeholder="Input Customer Name" name="name" value="{{Auth::user()->name }}">
                </div> 
              
                <div class="order-customer-phone label">
                    <label>Phone :</label>
                    <input type="text" placeholder="Input Phone Number" name="phone" value="">
                </div>
                <div class="order-customer-region label">
                    <label>Region :</label>
                    <input type="text" placeholder="region(Nairobi,Kisumu ...)" name="region" value="">
                </div>
                <div class="order-customer-area label">
                    <label>Area :</label>
                    <input type="text" placeholder="Area(Kawangware,Utawala ...)" name="area" value="">
                </div>
                <div class="order-customer-additionalInfo label">
                    <label>Additional Info :</label>
                    <textarea placeholder="Write any additional information here..." name="additionalInfo"></textarea>
                </div>
                <div class="order-customer-update">
                    <button class="order-customer-btn" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
