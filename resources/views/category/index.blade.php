@extends('admin.index')
@section('content')
    @if (session('message'))
        <div>{{ session('message') }}</div>
    @endif

    <h2>Categories</h2>
    <br>

    <div>
        <h2><a href="{{ route('category.create') }}">Create Category</a></h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($categories as $key=>$item)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td><a href="{{url('category/'.$item->id.'/edit')}}">Edit</a></td>
                <td><a href="{{url('category/'.$item->id.'/delete')}}">Delete</a></td>
            </tr> 
            @endforeach
        </tbody>
    </table>
@endsection
