@extends('admin.index')

@section('content')
    <div class="page-header-create">
        <p>Create header</p>
        <form action="{{route('header.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Header Image</label>
                <br>
                <input type="file" name="image">
            </div>

            <div>
                <label>Header Title</label>
                <br>
                <input type="text" name="title">
            </div>
            
            <div>
                <label>Header Message</label>
                <br>
                <input type="text" name="message">
            </div>

            <div>
                <label>Header Action Button</label>
                <br>
                <input type="text" name="action">
            </div>

            <button type="Submit">Save</button>
        </form>
    </div>
@endsection
