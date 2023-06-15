<x-app-layout>
    <div>
        <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <h1>Create Product</h1>
            <div>
                <label for="image">Image</label>
                <input type="file" name="image" placeholder="product Image">
            </div>

            <div>
                <label>Product Name</label>
                <input type="text" name="name" placeholder="product Name">
            </div>

            <div>
                <label>Product Description</label>
                <textarea name="description" placeholder="product Description"></textarea>
            </div>

            <div>
                <label> Product Price</label>
                <input type="number" name="price" placeholder="Product Price">
            </div>

            <button type="submit"> Add Product</button>
        </form>
    </div>
</x-app-layout>
