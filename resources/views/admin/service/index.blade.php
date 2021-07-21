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
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <!-- @php($i = 1) -->
                                    @foreach ($services as $item)
                                    <tr>
                                        <th scope="row">{{ $services->firstItem()+$loop->index }}</th>
                                        <td> {{ $item->title }} </td>
                                        <td> {{ $item->content }} </td>
                                        <td> <img src="{{asset($item->logo)}}" style="height: 40px; with:70px;" alt=""> </td>
                                        <td>
                                            @if($item->created_at == NULL)
                                            <span class="text-danger">NO Date Set</span>
                                            @else
                                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                            @endif
                                        </td>
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
                        <div class="card-header">Add Brand</div>
                        <div class="card-body">
                            <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput">Brand Name</label>
                                    <input type="text" name="brand_name" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="ປ້ອນປະເພດຜູ້ໃຊ້">

                                        @error('category_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <div class="form-group">
                                    <label for="exampleInput">Brand Image</label>
                                    <input type="file" name="brand_image" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="ປ້ອນປະເພດຜູ້ໃຊ້">

                                        @error('brand_image')
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

