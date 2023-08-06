@extends('admin.index')

@section('content')

    <div class="admin-create">
      
        <div class="admin-create-title">
            <a href="{{ route('product.index') }}" class="fa-solid fa-arrow-left fa-2xl"></a>
        </div>

        <div class="admin-create-form-container">

            <div class="admin-create-form">
                <p class="admin-create-p">Edit Product</p>

                <form action="{{url('product/'.$product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div>
                        <label>Select Category</label>
                        <select name="category_id" class="admin-select">
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}" >
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="image">Image</label>
                        <input type="file" name="image" placeholder="product Image" value="{{ $product->image }}"  class="admin-input">
        
                    </div>
        
                    <div>
                        <label>Product Name</label>
                        <input type="text" name="name" placeholder="product Name" value="{{ $product->name }}"  class="admin-input">
                    </div>
        
                    <div>
                        <label>Product Description</label>
                        <textarea name="description" placeholder="product Description"  class="admin-input">{{ $product->description }}</textarea>
                    </div>
        
                    <div>
                        <label> Product Price</label>
                        <input type="number" name="price" placeholder="Product Price" value="{{ $product->price }}"  class="admin-input">
                    </div>
        
                    <button type="submit">Update</button>
                </form>
            </div>


        </div>

    </div>

@endsection
