@extends('master')

@section('title')
    Add Blog Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Blog Form</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                            <form action="{{route('blog.new')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-md-3">Blog Tile</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Author Name</div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="author">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Blog Description</div>
                                    <div class="col-md-9">
                                        <textarea name="description" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Blog Image</div>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-success px-5" name="btn" value="Create New Blog"/>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
