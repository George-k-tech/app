@extends('admin.index')

@section('content')
@if (session('message'))
<div>{{ session('message') }}</div>
@endif
    <div class="test">
        <div>
            <h1>Product page</h1>
        </div>
        <a href="{{ route('product.create') }}"> Create Product</a>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>name</th>
                    <th>description</th>
                    <th>price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ $item->image }}" alt="Product Image" style="width:20%"></td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td><a href="{{ url('product/'.$item->id.'/delete') }}">Delete</a></td>
                        <td><a href="{{ url('product/'. $item->id.'/edit') }}"> Edit</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
