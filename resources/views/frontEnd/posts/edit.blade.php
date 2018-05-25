@extends('frontEnd.layouts.master')

@section('title')
   Edit Post
@endsection

@section('content')
    <section class="comment-section center-text">
        <div class="container">
            <h4><b>EDIT POST </b></h4>
            <form class="form-horizontal" method="POST" action="{{ url('/editPost',array($posts->id)) }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="row">


                    <div class="col-lg-2 col-md-0"></div>

                    <div class="col-lg-8 col-md-12">
                        <div class="comment-form">

                            <div class="row">


                                <div class="col-sm-6 {{ $errors->has('post_title') ? ' has-error' : '' }}">
                                    <input id="post_title" type="text" aria-required="true" name="post_title" class="form-control"
                                           placeholder="Post Title" value="{{ $posts->post_title }}" aria-invalid="true" required >

                                    @if ($errors->has('post_title'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('post_title') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- col-sm-6 -->



                                <div class="col-sm-12 {{ $errors->has('post_body') ? ' has-error' : '' }}">
                                <textarea id="post_body" type="post_body"  name="post_body" class="form-control"  placeholder="Post Body" aria-invalid="true"
                                          required >
                                          {{ $posts->post_body }}</textarea>

                                    @if ($errors->has('post_body'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('post_body') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- col-sm-6 -->


                                <div class="col-md-6 {{ $errors->has('category_id') ? ' has-error' : '' }}">
                                    <select id="category_id" type="category_id" class="form-control"
                                            name="category_id" required>

                                        <option value="{{ $category->id }}">{{ $category->category}}"</option>
                                        @if(count($categories) > 0)
                                            @foreach($categories->all() as $category)
                                                <option value="{{ $category->id }}">{{$category->category}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="help-block">
                      <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                    @endif

                                </div><!-- col-sm-12 -->

                                <div class="col-sm-12 {{ $errors->has('post_image') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <input id="post_image" type="file" class="form-control" name="post_image"
                                               required>

                                        @if ($errors->has('post_image'))
                                            <span class="help-block">
                              <strong>{{ $errors->first('post_image') }}</strong>
                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <button class="submit-btn" type="submit" id="form-submit"><b>UPDATE POST </b></button>
                            </div><!-- col-sm-12 -->

                        </div><!-- row -->
                    </div>
                </div>
            </form>
        </div>
        </div><!-- comment-form -->

        </div>
        </div>
        </div>

        </div>
    </section>
@endsection