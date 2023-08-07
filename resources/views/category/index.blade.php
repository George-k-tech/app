@extends('admin.index')
@section('content')
    <div class="admin-category">
        @if (session('message'))
            <div>{{ session('message') }}</div>
        @endif

        <div class="admin-category-head">
            <p>Categories</p>
        </div>
        <div class="category-hr">

        </div>

        <div class="admin-category-btn">
            <div>

            </div>
            <div>
                <a href="{{ route('category.create') }}" class="category-create-a">Create Category</a>
            </div>
        </div>

        <div class="admin-category-body">

            <div class="admin-category-body-head">
                <div>
                    <p>#</p>
                </div>

                <div>
                    <p>Name</p>
                </div>

                <div>
                    <p>Action</p>
                </div>

            </div>

            @foreach ($categories as $key => $item)
                <div class="admin-category-body-body">
                    <div class="div">
                        <p>{{ $key + 1 }}</p>
                    </div>

                    <div class="div">
                        <p>{{ $item->name }}</p>
                    </div>
                    <div class="category-action div">
                        <p><a href="{{ url('category/' . $item->id . '/edit') }}" class="category-edit-btn">Edit</a></p>
                        <p><a href="{{ url('category/' . $item->id . '/delete') }}" class="fa fa-trash" ></a></p>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
