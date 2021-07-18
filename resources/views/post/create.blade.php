@extends('layouts.super.design')
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2>Write something amazing</h2>
                        <hr class="small">
                        <span class="subheading">Do not forget to save when done</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container">
        <div>
            <a href="{{ route('master.dashboard') }}" class="btn btn-xs">&nbsp;
                <i class="fa fa-arrow-left"></i>Back</a>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-center text-primary">New Post</h3>
                    </div>
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="sub_title" class="form-label">Sub Title</label>
                            <input type="text" class="form-control" name="sub_title">
                        </div>
                        <div class="form-group">
                            <label for="content" class="form-label">Content</label>
                            <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="card-footer">
                            <input type="submit" value="Save" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection