@extends('layouts.super.design')
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h2>Life is made of stories and events</h2>
                        <hr class="small">
                        <span class="subheading">Writing them down is creating long lasting memory</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <a href="{{ route('master.dashboard') }}" class="btn btn-xs">&nbsp;
                    <i class="fa fa-arrow-left"></i>Back</a>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Content</th>
                            <th>Media</th>
                            <th>Slug</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post )
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->sub_title }}</td>
                            <td>{!! $post->content !!}</td>
                            <td>{{ $post->media }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>@if ($post->author == Auth::user()->id)
                                {{ Auth::user()->name }}
                            @else
                                User
                                @endif
                            </td>
                            <td>{{ $post->created_at }}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Sub Title</th>
                            <th>Content</th>
                            <th>Media</th>
                            <th>Slug</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <hr>
@endsection
