@extends('admin.index')

@section('content')
    <div class="test">
        <div class="test">
            <h1>Create Product Page</h1>
        </div>
        <div>
            <a href="{{ route('product.index') }}"> View Products</a>
        </div>
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>select Category</label>
            <select name="category_id">
                @foreach ($categories as $item)
                    <option value="{{ $item->id }}">
                        {{ $item->name }}
                    </option>
                @endforeach
            </select>
            <br>
            <br>
            <label>Product Image</label>
            <input type="file" name="image">
            <br>
            <br>
            <label>Product Name</label>
            <input type="text" name="name">
            <br>
            <br>
            <label>Product Description</label>
            <input type="text" name="description">
            <br>
            <br>
            <label>Product price</label>
            <input type="text" name="price">
            <br>
            <br>
            <button type="submit">save</button>
        </form>
    </div>
@endsection
