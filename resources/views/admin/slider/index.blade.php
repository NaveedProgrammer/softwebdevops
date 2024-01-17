@extends('layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        <a href="{{ route('admin.slider.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i>
                            Add New
                        </a>
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Slider List</li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">
                        Siders List
                    </h1>
                </div>
                <div class="card-body">
                    <table id="example1" class="table text-center table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! $item->description !!}</td>
                                    <td>
                                        <img src="{{ asset('storage/Files/slider/'.$item->image) }}" alt="{{$item->image}}" style="width:100px;height: 100px;border-radius: 50%">
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.slider.edit', ['id'=>$item->id]) }}" class="btn btn-info">
                                            <i class="fas fa-pen fa-1x"></i>
                                        </a> &nbsp;
                                        <a href="{{ route('admin.slider.destroy', ['id'=>$item->id]) }}" class="btn btn-primary">
                                            <i class="fas fa-trash fa-1x"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
