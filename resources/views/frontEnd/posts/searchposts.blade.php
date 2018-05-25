@extends('frontEnd.layouts.master')

@section('title')
    Search
@endsection

@section('content')

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif

    @if(session('response'))
        <div class="alert alert-success">{{ session('response')}}</div>
    @endif


    <section class="blog-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        @if(count($posts) > 0)
                        @foreach($posts->all() as $post)
                            <div class="col-md-6 col-sm-12">
                                <div class="card h-100">
                                    <div class="single-post post-style-1">

                                        <div class="blog-image"><img src="{{$post->post_image}}" alt="Blog Image"></div>

                                        <h4 class="title"><b>{{$post->post_title}}</b></h4>
                                        <h4 class="title"><b>{{substr($post->post_body,0,150)}}</b></h4>

                                        <ul class="post-footer">
                                            <li><a href="{{url("/edit/{$post->id}") }}"><i class="ion-edit"></i>Edit</a></li>
                                            <li><a href="{{url("/delete/{$post->id}") }}"><i class="ion-trash-a"></i>Delete</a></li>
                                            <li><a href="{{url("/view/{$post->id}") }}"><i class="ion-eye"></i>View</a></li>
                                        </ul>


                                    </div><!-- single-post -->
                                </div><!-- card -->

                            </div><!-- col-md-6 col-sm-12 -->
                        @endforeach
                        @else
                            <p>No posts available</p>
                            </ul>

                        @endif

                    </div>
                </div>
            </div><!-- row -->
        </div>

        </div><!-- container -->

    </section><!-- section -->

@endsection