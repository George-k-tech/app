<x-app-layout>

  <div class="order-detail">
    <h2>customer details</h2>
    <form>
        @csrf
        <label>User Name</label>
        <input type="text" placeholder="Input your Name" value="{{ auth()->user()->name}}">
        <br>
        <br>
        <label>Phone Number</label>
        <input type="phone" placeholder="Input phone number">
        <br>
        <br>
        <label>Address</label>
        <input type="text" placeholder="Input address">
        <br>
        <br>
        <label>Additional information</label>
        <input type="text" placeholder="input additional info">
        <br>
        <br>
    </form>
    <p>details not right? <a href="{{route('profile.edit')}}">click here</a></p>
    <h2>Delivery Details</h2>

  </div>


</x-app-layout>
