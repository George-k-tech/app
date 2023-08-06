@extends('admin.index')

@section('content')
    <div class="admin-create">

        <div class="admin-create-title">
            <a href="{{ route('product.index') }}" class="fa-solid fa-arrow-left fa-2xl"></a>
        </div>


        <div class="admin-create-form-container">


            <div class="admin-create-form">
                <p class="admin-create-p">Create Product</p>
                <form  action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
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
                        <label>Product Image</label>
                        <input type="file" name="image"  class="admin-input">
                    </div>
                   
                    <div>
                        <label>Product Name</label>
                        <input type="text" name="name"  class="admin-input">
                    </div>
                   
                    <div>
                        <label>Product Description</label>
                        <textarea type="text" name="description"  class="admin-input">

                        </textarea>
                    </div>
                   
                    <div>
                        <label>Product price</label>
                        <input type="text" name="price"  class="admin-input">
                    </div>
        
                        <button type="submit">save</button>
                    
                </form>
            </div>
    

        </div>
    </div>
@endsection
