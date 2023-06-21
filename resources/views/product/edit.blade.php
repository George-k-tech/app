<x-app-layout>
    <div>
        <div>
            <h1>Edit Product Page</h1>
        </div>
        <div>
            <a href="{{ route('product.index') }}"> View Products</a>
        </div>
        <form action="{{url('product/'.$product->id)}}" method="POST">
            @csrf
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" placeholder="product Image" value="{{ $product->image }}">

            </div>

            <div>
                <label>Product Name</label>
                <input type="text" name="name" placeholder="product Name" value="{{ $product->name }}">
            </div>

            <div>
                <label>Product Description</label>
                <textarea name="description" placeholder="product Description">{{ $product->description }}</textarea>
            </div>

            <div>
                <label> Product Price</label>
                <input type="number" name="price" placeholder="Product Price" value="{{ $product->price }}">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</x-app-layout>
