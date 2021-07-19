@extends('layouts.super.design')
@section('content')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('assets/img/post-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->sub_title }}</h2>
                        <span class="meta">Posted by <a href="#">
                                @if ($post->author == Auth::user()->id)
                                    {{ Auth::user()->name }}
                                @else
                                    User
                                @endif
                            </a> on {{ \Carbon\Carbon::parse($post->created_at)->isoFormat('MMM Do YYYY') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </article>
    <hr>
    <a href="{{ route('master.dashboard') }}" class="btn btn-xs">&nbsp;
        <i class="fa fa-arrow-left"></i>Back</a>
@endsection
