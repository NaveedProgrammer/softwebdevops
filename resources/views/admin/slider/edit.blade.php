@extends('layouts.layout')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                        Edit Slider
                    </h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Slider</li>
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
                        Update Siders
                    </h1>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.slider.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$slider->id}}">
                            <label for="title">Tiltle</label>
                            <input type="text" id="title" name="title" value="{{ $slider->title ?? '' }}"
                                class="form-control" placeholder="Title Here">
                        </div>
                        <div class="form-group">
                            <label for="summernote">Description</label>
                            <textarea id="summernote" name="description">
                                {{ $slider->description ?? '' }}
                            </textarea>
                        </div>
                        <div class="form-group">

                            <img src="{{ asset('storage/Files/slider/' . $slider->image) }}" alt="{{ $slider->image }}"
                                style="width:200px;height: 200px;border-radius: 50%">
                                <br>
                            <label for="image">Background Image</label>
                            <input type="file" id="image" name="image" class="form-control form-control-file">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
