<x-app-layout>
    <div>
        <h1>The product Page</h1>
    </div>
    <div>
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
                        <th>{{ $key + 1 }}</th>
                        <td>
                            <img src="{{ $item->image }}" alt="Product Image" style="width:10%">
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td><a href="{{url('product/'.$item->id)}}"> Edit</a> </td>
                        <td><a href="{{ url('product/' . $item->id) }}"> Delete</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
