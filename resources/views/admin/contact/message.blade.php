@extends('admin.admin_master')

@section('admin')

    <div class="py-12">
        <!-- Item -->
        <div class="container">
            <div class="row">
                <h4>Addmin Message Page</h4>
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

                        <div class="card-header">All Message data</div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" width="5%">SL</th>
                                        <th scope="col" width="15%">Name</th>
                                        <th scope="col" width="25%">Email</th>
                                        <th scope="col" width="15%">Subject</th>
                                        <th scope="col" width="15%">Message</th>
                                        <th scope="col" width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        @php($i = 1)
                                    @foreach ($message as $mess)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td> {{ $mess->name }} </td>
                                        <td> {{ $mess->email }}  </td>
                                        <td> {{ $mess->subject }}  </td>
                                        <td> {{ $mess->message }}  </td>
                                        <td>
                                            <a href="{{ url('contact/delete/'.$mess->id) }}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
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

