@extends('frontEnd.layouts.master')

@section('title')
    View
@endsection

@section('content')


    <section class="post-area">
        <div class="container">

            <div class="row">

                <div class="col-lg-1 col-md-0"></div>
                <div class="col-lg-10 col-md-12">

                    <div class="main-post">

                        <div class="post-top-area">

                            <h5 class="pre-title">VIEW</h5>

                                @foreach($posts->all() as $post)

                                <h3 class="title"><b>{{$post->post_title}}</b></h3>

                            <div class="post-info">
                            </div><!-- post-info -->

                            <p class="para">{{$post->post_body}}</p>

                        </div><!-- post-top-area -->
                        <div class="post-image"><img src="{{$post->post_image}}" alt="Blog Image"></div>
                              @endforeach

                        <div class="post-icons-area">
                                <ul class="post-icons">
                                    <li><a href="{{url("/like/{$post->id}") }}"><i class="ion-heart">Like({{  $likepress }})</i></a></li>
                                    <li><a href="{{url("/dislike/{$post->id}") }}"><i class="ion-thumbsdown">Dislike({{  $dislikepress}})</i></a></li>
                                </ul>
                            </div>

                        <section class="comment-section center-text">
                            <div class="container">
                                <h4><b>POST COMMENT</b></h4>

                                <div class="row">
                                    <div class="col-lg-2 col-md-0"></div>

                                    <div class="col-lg-8 col-md-12">
                                        <form method="POST" action='{{url("/comment/{$post->id}")}}'>
                                            {{csrf_field()}}
                                        <div class="comment-form">
                                            <div class="row">
                                                    <div class="col-sm-12">
                                                        <textarea name="comment" rows="2" class="text-area-messge form-control"
                                              placeholder="Enter your comment" aria-required="true" aria-invalid="false"></textarea >

                                                    </div><!-- col-sm-12 -->
                                                    <div class="col-sm-12">
                                                        <button class="submit-btn" type="submit" id="form-submit"><b>POST COMMENT</b></button>
                                                    </div><!-- col-sm-12 -->

                                                </div><!-- row -->

                                        </div><!-- comment-form -->
                                        </form>

                                        <h4><b>COMMENTS</b></h4>
                                        @if(count($comments) > 0)
                                            @foreach($comments->all() as $comment)
                                        <div class="commnets-area text-left">

                                            <div class="comment">

                                                <div class="post-info">
                                                    <div class="middle-area">
                                                        <a class="name" href="#"><b>Posted by:{{$comment->name}}</b></a>

                                                    </div>
                                                </div><!-- post-info -->
                                                <p>{{$comment->comment}}</p>
                                            </div>
                                        </div><!-- commnets-area -->
                                            @endforeach

                                        @else
                                            <p>No comments available</p>

                                        @endif
                                        <a class="more-comment-btn" href="#"><b>VIEW MORE COMMENTS</b></a>

                                    </div><!-- col-lg-8 col-md-12 -->

                                </div><!-- row -->

                            </div><!-- container -->
                        </section>



                        <h4 class="title"><b>Categories</b></h4>
                        <ul class="tags">
                            @foreach($categories->all() as $category)
                                <li><a href="{{url("category/{$category->id}")}}"> {{$category->category}}</a></li>
                            @endforeach
                        </ul>


                    </div><!-- post-bottom-area -->

                    </div><!-- main-post -->
                </div><!-- col-lg-8 col-md-12 -->
            </div><!-- row -->
        </div><!-- container -->
    </section><!-- post-area -->

@endsection