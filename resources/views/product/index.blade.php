@extends('admin.index')

@section('content')
    <div class="test">
        @if (session('message'))
            <div>{{ session('message') }}</div>
        @endif

        <div class="admin-product-title">
            <h1>Product page</h1>
        </div>

        <div class="admin-create-btn">
            <div></div>
            <a href="{{ route('product.create') }}" class="admin-create-a"> Create Product</a>
        </div>

        <div class="admin-product-display">

            <div class="admin-product-head">

                <div>
                    <p>#</p>
                </div>
                <div>
                    <p>Category</p>
                </div>
                <div>
                    <p>Image</p>
                </div>
                <div>
                    <p>Name</p>
                </div>
                <div>
                    <p>Description</p>
                </div>
                <div>
                    <p>Price</p>
                </div>
                <div>
                    <p>Actions</p>
                </div>
            </div>

            <div class="admin-line">

            </div>


            <div class="admin-product-body">

                @foreach ($products as $key => $item)
                    <div class="admin-product-body-main">

                        <div class="div">
                            <p>{{ $key + 1 }}</p>
                        </div>
                        <div class="div">
                            <p>{{ $item->category->name }}</p>
                        </div>
                        <div class="div">
                            <p><img src="{{ $item->image }}" alt="Product Image" style="width:150px"></p>
                        </div>
                        <div class="div">
                            <p>{{ $item->name }}</p>
                        </div>
                        <div class="div">
                            <p>{{ $item->description }}</p>
                        </div>
                        <div class="div">
                            <p>{{ $item->price }}</p>
                        </div>
                        <div class="admin-action div">
                            <p><a href="{{ url('product/' . $item->id . '/delete') }}" class="fa fa-trash"></a></p>
                            <p><a href="{{ url('product/' . $item->id . '/edit') }}" class="admin-edit-btn"> Edit</a> </p>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>

    </div>
@endsection
