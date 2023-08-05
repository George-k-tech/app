@extends('admin.index')
@section('content')
@if (session('message'))
<div>{{ session('message') }}</div>
@endif
<h2>the category page</h2>

@endsection