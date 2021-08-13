@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="page-content" style="background-color: #fff; padding: 20px">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New</h1>
            <!-- <a href="{{route('category.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fa fa-plus fa-sm text-white-50"></i> Add New</a> -->
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title <span class="required">*</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="catTitle" name="title" value="{{@old('title')}}">
                            @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="slug" class="col-sm-2 col-form-label">Slug</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="catSlug" name="slug" value="{{@old('slug')}}">
                            @error('slug')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="parentId" class="col-sm-2 col-form-label">Parent</label>
                        <div class="col-sm-10">
                            <select class="form-control @error('parent_id') is-invalid @enderror" name="parent_id" value="{{@old('parent_id')}}">
                                <option value="0">No Parent</option>
                                <option value="1">Shirt</option>
                                <option value="2">Pant</option>
                                <option value="3">Kids</option>
                                <option value="4">Men</option>
                            </select>
                            @error('parent_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="catImage" name="image" value="{{@old('image')}}">
                            @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-2">
                            <hr>
                            </hr>
                            <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection