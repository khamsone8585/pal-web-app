@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <!-- Item -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">All Service</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Service Title</th>
                                        <th scope="col">Service Content</th>
                                        <th scope="col">Service logo</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <!-- @php($i = 1) -->
                                    @foreach ($services as $item)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td> {{ $item->title }} </td>
                                        <td> {{ $item->content }} </td>
                                        <td> <img src="{{asset($item->logo)}}" style="height: 40px; with:70px;" alt=""> </td>
                                        <td>
                                            <a href="{{ url('service/edit/'.$item->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('service/delete/'.$item->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add Service</div>
                        <div class="card-body">
                            <form action="{{route('store.service')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput">Service title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="Service Title">

                                        @error('title')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Service Content</label>
                                    <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>

                                        @error('content')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Service Logo</label>
                                    <input type="file" name="logo" class="form-control" id="exampleInput" aria-describedby="emailHelp">

                                        @error('logo')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Add Brand</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

