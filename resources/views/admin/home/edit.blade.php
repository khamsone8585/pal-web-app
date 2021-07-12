@extends('admin.admin_master')

@section('admin')
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Edit About</h2>
            </div>
            <div class="card-body">
                <form action="{{url('update/homeabout/'.$homeabout->id))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About Content</label>
                        <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="8">{{$homeabout->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About Vision</label>
                        <textarea class="form-control" name="vision" id="exampleFormControlTextarea1" rows="8">{{$homeabout->vision}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">About Mission</label>
                        <textarea class="form-control" name="mission"id="exampleFormControlTextarea1" rows="8">{{$homeabout->mission}}</textarea>
                    </div>
                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
@endsection