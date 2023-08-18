@extends('admin.index')

@section('content')
    <div class="page-header">
        @if (session('message'))
            <div>{{ session('message') }}</div>
        @endif

        <div class="page-header-title">
            <p>Headers Page</p>
        </div>

        <div>
            <div></div>
            <p><a href="{{ route('header.create') }}">Create Header</a></p>
        </div>

        <div class="page-header-display">

            <div class="page-header-head">
                <div>
                    <p>#</p>
                </div>

                <div>
                    <p>Image</p>
                </div>

                <div>
                    <p>Title</p>
                </div>

                <div>
                    <p>Message</p>
                </div>

                <div>
                    <p>Action Text</p>
                </div>

            </div>

            <div class="page-header-line">

            </div>

            <div class="page-header-body">
                @foreach ($headers as $key => $item)
                    <div class="page-header-body-main">

                        <div class="page-div">
                            <p>{{++$key}}</p>
                        </div>

                        <div class="page-div">
                            <p><img src="{{$item->image}}" style="width:150px"></p>
                        </div>

                        <div class="page-div">
                            <p>{{$item->title}}</p>
                        </div>

                        <div class="page-div">
                            <p>{{$item->message}}</p>
                        </div>

                        <div class="page-div">
                            <p>{{$item->action}}</p>
                        </div>

                        <div class="page-header-action page-div">
                            <p><a href="{{ url('header/' . $item->id . '/delete') }}" class="fa fa-trash"></a></p>
                            <p><a href="{{ url('header/' . $item->id . '/edit') }}" class="page-edit-btn"> Edit</a> </p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>


    </div>
@endsection
