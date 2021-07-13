@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <!-- Item -->
        <div class="container">
            <div class="row">
                <h4>Contact Page</h4>
                    <a href="{{ route('add.contact') }}"><button class="btn btn-info">Add Contact</button></a>
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

                        <div class="card-header">All Contact data</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" width="5%">SL</th>
                                        <th scope="col" width="15%">Contact Address</th>
                                        <th scope="col" width="25%">Contact Email</th>
                                        <th scope="col" width="15%">Contact Phone</th>
                                        <th scope="col" width="15%">Contact Open</th>
                                        <th scope="col" width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php($i = 1)
                                    @foreach ($contacts as $con)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $con->address }} </td>
                                        <td> {{ $con->email }}  </td>
                                        <td> {{ $con->phone }}  </td>
                                        <td> {{ $con->open }}  </td>
                                        <td> 
                                            @if($con->created_at == NULL)
                                            <span class="text-danger">NO Date Set</span>
                                            @else
                                            {{ Carbon\Carbon::parse($con->created_at)->diffForHumans() }}
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ url('contact/edit/'.$con->id) }}" class="btn btn-info">Edit</a>
                                            <a href="{{ url('contact/delete/'.$con->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

