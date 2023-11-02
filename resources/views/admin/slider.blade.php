@extends('layouts.admin')
@section('content')
    @if(session()->has('store'))
        <div class="alert alert-success" role="alert">
            {{ session()->get('store') }}
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        </script>
    @endif

    @if(session()->has('update'))
        <div class="alert alert-primary" role="alert">
            {{ session()->get('update') }}
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        </script>
    @endif

    @if(session()->has('delete'))
        <div class="alert alert-danger" role="alert">
            {{ session()->get('delete') }}
        </div>
        <script>
            setTimeout(function() {
                $('.alert').fadeOut();
            }, 5000);
        </script>
    @endif

    <div class="card">
        <div class="card-header">
            <h4>Select a Slider</h4>
        </div>

        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if($records)
                        @php
                            $selectedBlogs = json_decode($records->selectedBlogs, TRUE);
                            //dd($selectedBlogs);
                        @endphp
                        @foreach ($blogs as $record)
                            <tr>
                                <td>{{$record->id}}</td>
                                <td>{{$record->title}}</td>
                                <td>{{$record->category->name}}</td>
                                <td>
                                    <img src="{{asset('admin/blogImage/'.$record->image)}}" alt="Image" width="300">
                                </td>
                                <td>
                                    <form action="{{url('dashboard/dynamic-edit/update-slider/'.$records->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                        <input name="selectedBlogs[]" type="checkbox" value="{{$record->id}}"
                                        {{ in_array($record->id, $selectedBlogs) ? 'checked' : '' }}>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach ($blogs as $record)
                            <tr>
                                <td>{{$record->id}}</td>
                                <td>{{$record->title}}</td>
                                <td>{{$record->category->name}}</td>
                                <td>
                                    <img src="{{asset('admin/blogImage/'.$record->image)}}" alt="Image" width="300">
                                </td>
                                <td>
                                    <form action="{{url('dashboard/dynamic-edit/insert-slider')}}" method="POST">
                                    @csrf
                                        <input name="selectedBlogs[]" type="checkbox" value="{{$record->id}}">
                                </td>
                            </tr>
                        @endforeach    
                    @endif
                </tbody>
            </table>
                <input type="submit" value="Seçilen Blogları İşle">
            </form>
        </div>
    </div>    
@endsection