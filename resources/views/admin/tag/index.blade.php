@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <!-- Item -->
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">All Tag</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL No</th>
                                        <th scope="col">Tag Name</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <!-- @php($i = 1) -->
                                    @foreach ($tags as $item)
                                    <tr>
                                        <th scope="row">{{$i++}}</th>
                                        <td> {{ $item->name }} </td>
                                        <td>
                                            @if($item->created_at == NULL)
                                            <span class="text-danger">NO Date Set</span>
                                            @else
                                            {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('tag/edit/'.$item->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('tag/delete/'.$item->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">Add tag</div>
                        <div class="card-body">
                            <form action="{{route('store.tag')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput">Tag Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInput" aria-describedby="emailHelp">

                                        @error('category_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror

                                </div>
                                <button type="submit" class="btn btn-primary mt-2">Add Tag</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

