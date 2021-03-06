@extends('layouts.super.design')
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Welcome</h1>
                        <hr class="small">
                        <span class="subheading">A Personal Blog page just for you!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="pager">
                    <li class="previous">
                        <a href="{{ route('post.create') }}">New Post</a>
                    </li>
                    <li class="next">
                        <a href="{{ route('post.index') }}">Older Posts &rarr;</a>
                    </li>
                </ul>
                @foreach ($posts as $post)
                    <div class="post-preview">
                        <a href="{{ route('post.show',$post) }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->sub_title }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted by: <a href="#">
                            @if ($post->author == Auth::user()->id)
                                {{ Auth::user()->name }}
                            @else
                                User
                            @endif</a> On: {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY') }}</p>
                    </div>
                    <hr>
                @endforeach
                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="{{ route('post.create') }}">New Post</a>
                    </li>
                    <li class="next">
                        <a href="{{ route('post.index') }}">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
@endsection
