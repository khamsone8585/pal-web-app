@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit Tag</h2>
            </div>
            <div class="card-body">
                <form action="{{url('tag/update/'.$tags->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Name Tag</label>
                        <input class="form-control" name="name" id="exampleFormControlTextarea1" rows="8" value="{{$tags->name}}">
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection