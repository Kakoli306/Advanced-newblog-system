@extends('layouts.app')

@section('title')
    BLOG

    @endsection

@section('content')
    <section class="blog-area section">
        <div class="container">
            <div class="row">
                @foreach($posts->all() as $post)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="single-post post-style-1">

                        <div class="blog-image"><img src="{{$post->post_image}}" alt="Blog Image"></div>


                        <div class="blog-info">

                            <h4 class="title"><a href="#"><b>{{$post->post_title}}</b></a></h4>
                            <h4 class="title"><b>{{substr($post->post_body,0,150)}}</b></h4>

                             <?php
                            $likes=DB::table('likes')->where('post_id',$post->id)->get()->count();
                               ?>

                            <ul class="post-footer">
                                <li><a href="{{url("/user/like/$post->id") }}"><i class="ion-heart">Like{{ $likes }}</i></a></li>
                                <li><a href="{{url("/view/{$post->id}") }}"><i class="ion-eye"></i>View</a></li>
                            </ul>

                        </div><!-- blog-info -->
                    </div><!-- single-post -->
                </div><!-- card -->
            </div><!-- col-lg-4 col-md-6 -->
                @endforeach
            </div>
            <a class="load-more-btn" href="#"><b>LOAD MORE</b></a>

        </div><!-- container -->
    </section><!-- section -->

@endsection