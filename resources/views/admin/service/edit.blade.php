@extends('admin.admin_master')

@section('admin')
    
    <div class="py-12">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Edit Service</div>
                        <div class="card-body">
                            <form action="{{ url('service/update/'.$services->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_image" value="{{ $services->image }}">

                                <div class="form-group">
                                    <label for="exampleInput">Edit Service Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInput" aria-describedby="emailHelp" value="{{$services->title}}">

                                        @error('brand_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Edit Service Content</label>
                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="8">{{$services->content}}</textarea>
                                        @error('content')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Edit Service Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInput" aria-describedby="emailHelp" value="{{$services->image}}">

                                        @error('image')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>

                                <div class="form-group">
                                    <img src="{{ asset($services->image) }}" style="width:400px; height:200px;" alt="image" >
                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Update Service</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
