@extends('frontEnd.layouts.master')

@section('title')
   Post View
@endsection

@section('content')

    <section class="blog-area section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <div class="row">
                        @foreach($posts->all() as $post)
                            <div class="col-md-6 col-sm-12">
                                <div class="card h-100">
                                    <div class="single-post post-style-1">

                                        <div class="blog-image"><img src="{{$post->post_image}}" alt="Blog Image"></div>

                                        <h4 class="title"><b>{{$post->post_title}}</b></h4>
                                        <h4 class="title"><b>{{$post->post_body}}</b></h4>




                                    </div><!-- single-post -->
                                </div><!-- card -->

                            </div><!-- col-md-6 col-sm-12 -->
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 ">

                    <div class="single-post info-area ">
                        <div class="tag-area">

                            <h4 class="title"><b>Categories</b></h4>
                            <ul class="list-group">
                                @foreach($categories->all() as $category)
                                    <li class="list-group-item"><a href='{{url("category/{$category->id}")}}'>
                                            {{$category->category}}</a></li>
                                @endforeach

                            </ul>

                        </div><!-- subscribe-area -->

                    </div><!-- info-area -->

                </div><!-- col-lg-4 col-md-12 -->


            </div><!-- row -->
        </div>

        </div><!-- container -->

    </section><!-- section -->

@endsection