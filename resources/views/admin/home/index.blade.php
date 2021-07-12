@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <!-- Item -->
        <div class="container">
            <div class="row">
                <h4>Home About</h4>
                    {{-- <a href="{{ route('add.about') }}"><button class="btn btn-info">Add About</button></a> --}}
                <br><br>
                <div class="col-md-12">
                    <div class="card">

                        @if(session('success'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong> {{ session('success') }}!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="card-header">All About data</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">About Content</th>
                                        <th scope="col">About Vision</th>
                                        <th scope="col">About Mission</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php($i = 1)
                                    @foreach ($homeabout as $about)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $about->content }} </td>
                                        <td> {{ $about->vision }}  </td>
                                        <td> {{ $about->mission }}  </td>
                                        <td> 
                                            @if($about->created_at == NULL)
                                            <span class="text-danger">NO Date Set</span>
                                            @else
                                            {{ Carbon\Carbon::parse($about->created_at)->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('about/edit/'.$about->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('about/delete/'.$about->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        {{-- {{ $sliders->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

