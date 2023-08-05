@extends('admin.index')
@section('content')
@if (session('message'))
<div>{{ session('message') }}</div>
@endif


<div>
    <h2><a href="{{route('category.index')}}">View Categories</a></h2>
</div>
<br>
<h2>Add Category</h2>
<form action="{{route('category.store')}}" method="Post">

@csrf
<label>Category Name</label>
<input type="text" name="name">
<br>
<button type="submit">Save</button>
</form>

@endsection