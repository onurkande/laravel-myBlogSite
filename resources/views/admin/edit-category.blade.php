@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4>
        </div>
        <div class="card-body">
            <form action="{{url('dashboard/dynamic-edit/update-category/'.$records->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" value="{{$records->name}}">
                    </div>
                    <div class="col-md-6">
                        <label for="">Slug</label>
                        <input type="text" class="form-control" name="slug" value="{{$records->slug}}">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>    
@endsection