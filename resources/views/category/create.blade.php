@extends('admin.index')
@section('content')
    <div class="admin-create-category">

        @if (session('message'))
            <div>{{ session('message') }}</div>
        @endif


        <div class="admin-create-category-back">
            <a href="{{ route('category.index') }}" class="fa-solid fa-arrow-left fa-2xl"></a>
        </div>

        <div class="admin-category-card">
            <div class="admin-create-category-title">
                <p>Create Category</p>
            </div>

            <form action="{{ route('category.store') }}" method="Post">
                @csrf
                <div class="admin-category-create-in">
                    <label>Category Name</label>
                    <input type="text" name="name" placeholder="Input Category name">
                </div>
                <div class="admin-save-category-btn">
                    <button type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
